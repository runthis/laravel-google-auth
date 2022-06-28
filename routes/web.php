<?php

use Illuminate\Support\Facades\Route;
use Runthis\Login\Login;

Route::group([ 'middleware' => [ 'web' ] ], static function (): void {
    Route::get(config('login.google.base_route'), [ Login::class, 'index' ])->name('login');
    Route::post(config('login.google.auth_route'), [ Login::class, 'login' ]);
});
