<?php

namespace Runthis\Login;

use Google_Client;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Runthis\Login\Contracts\Login as LoginContract;
use Runthis\Login\Events\UserWasAuthenticatedWithGoogle;

use function array_key_exists;
use function bin2hex;
use function compact;
use function config;
use function event;
use function in_array;
use function is_null;
use function random_bytes;
use function redirect;
use function session;
use function time;
use function view;

class Login implements LoginContract
{
    /**
     * The config option to load.
     */
    protected string $config = 'login.google';

    /**
     * The payload from the provider.
     */
    protected array|false $payload = false;

    /**
     * The Google Client instance.
     *
     * @var \Google_Client
     */
    protected $googleClient;

    /**
     * Load the main login page and set a security state session variable.
     */
    public function index(Request $request): View|Factory
    {
        $state = bin2hex(random_bytes(128 / 8));

        $request->session()->put(
            'oauth.state',
            $state
        );

        return view('login::index', compact('state'));
    }

    /**
     * Log the employee in.
     */
    public function login(Request $request): Redirector|RedirectResponse
    {

        if ($this->valid($request)) {

            // Trigger the event that the Google login was a success.
            event(new UserWasAuthenticatedWithGoogle($this->payload));

            return redirect(session('url.intended') ?? '/');
        }

        return redirect('/');
    }

    /**
     * Run all validations.
     */
    protected function valid(Request $request): bool
    {
        return
            $this->validPayload($request->credential) &&
            $this->validState($request) &&
            $this->validAudience() &&
            $this->validIssuer() &&
            $this->validExpiration() &&
            $this->validDomain();
    }

    /**
     * Verify that the payload is valid.
     */
    protected function validPayload(?string $credential): array|false
    {
        return is_null($credential) ? false : $this->payload = $this->getGoogleClient()->verifyIdToken($credential);
    }

    /**
     * Verify that the state is valid.
     */
    protected function validState(Request $request): bool
    {
        return
            !is_null($request->_state) &&
            !is_null($request->session()->get('oauth.state')) &&
            $request->session()->get('oauth.state') === $request->_state;
    }

    /**
     * Verify that the issuer is valid.
     */
    protected function validIssuer(): bool
    {
        return
            $this->exists('iss') &&
            in_array($this->payload['iss'], $this->ace('issuer'), true);
    }

    /**
     * Verify that the audience key matches.
     */
    protected function validAudience(): bool
    {
        return
            $this->exists('aud') &&
            $this->payload['aud'] === $this->ace('client_id');
    }

    /**
     * Verify that the expiration is valid.
     */
    protected function validExpiration(): bool
    {
        return
            $this->exists('exp') &&
            $this->payload['exp'] > $this->theTime();
    }

    /**
     * Verify that the domain name is valid.
     */
    protected function validDomain(): bool
    {
        return
            $this->exists('hd') &&
            $this->payload['hd'] === $this->ace('domain');
    }

    /**
     * Get an instance of the Google client
     */
    protected function getGoogleClient(): Google_Client
    {

        if (is_null($this->googleClient)) {
            $this->googleClient = new Google_Client([ 'client_id' => $this->ace('client_id') ]);
        }

        return $this->googleClient;
    }

    /**
     * Get config value for key.
     */
    protected function ace(string $key): mixed
    {
        return config($this->config . '.' . $key);
    }

    /**
     * Check if key exists in payload.
     */
    protected function exists(string $key): bool
    {
        return array_key_exists($key, $this->payload);
    }

    /**
     * Get the time.
     */
    protected function theTime(): int
    {
        return time();
    }
}
