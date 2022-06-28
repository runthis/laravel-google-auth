<?php

return [
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'domain' => env('GOOGLE_VALID_DOMAIN'),
        'auth_route' => env('GOOGLE_AUTH_ROUTE'),
        'base_route' => env('GOOGLE_BASE_ROUTE'),
        'redirect' => env('APP_URL') . env('GOOGLE_AUTH_ROUTE'),
        'issuer' => [
            'accounts.google.com',
            'https://accounts.google.com',
        ],
    ],
];
