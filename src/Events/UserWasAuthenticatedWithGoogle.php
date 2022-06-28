<?php

namespace Runthis\Login\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserWasAuthenticatedWithGoogle
{
    use Dispatchable;
    use SerializesModels;

    public function __construct(public array $payload)
    {
    }
}
