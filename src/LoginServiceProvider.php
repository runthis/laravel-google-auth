<?php

namespace Runthis\Login;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LoginServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('login')->hasRoute('web')->hasViews()->hasConfigFile();
        $this->app->bind('login', static fn ($app) => new Login());
    }
}
