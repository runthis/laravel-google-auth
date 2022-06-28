<?php

namespace Runthis\Login\Contracts;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

interface Login
{
    /**
     * Displays the authentication view.
     */
    public function index(Request $request): View|Factory;

    /**
     * Log the employee into the application.
     */
    public function login(Request $request): Redirector|RedirectResponse;
}
