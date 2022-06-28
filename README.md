# Laravel Google Authentication

A tiny laravel package to authenticate users via google with domain verification.


## Installation

    composer require runthis/laravel-google-auth



## Setup

##### Google

Head over to https://console.cloud.google.com/apis/credentials and set up some oauth credentials. Note the client id.


##### Laravel

Open up your .env file and add the following keys and adjust as necessary. 

    GOOGLE_CLIENT_ID="xxx.apps.googleusercontent.com"
    GOOGLE_BASE_ROUTE="/login"
    GOOGLE_AUTH_ROUTE="/auth/callback"
    GOOGLE_VALID_DOMAIN="domain.com"


With the above environment variables; When a user visits /login in your application, they will be presented with a page containing a button to sign in with Google.


## Usage

Package emits `Runthis\Login\Events\UserWasAuthenticatedWithGoogle` when google login is successful and contains an array payload with various keys provided by google (name, email, picture, etc).

Create a listener in Laravel. Add `use Runthis\Login\Events\UserWasAuthenticatedWithGoogle;`. Set the handle method parameter to `UserWasAuthenticatedWithGoogle $event`. Handle the event as you want (logging the user in, adding to database if you like, etc).



## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

