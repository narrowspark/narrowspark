<?php

/*
|--------------------------------------------------------------------------
| Load Environment Variables
|--------------------------------------------------------------------------
|
| Next we will load the environment variables for the application which
| are stored in the ".env" file. These variables will be loaded into
| the $_ENV and "putenv" facilities of PHP so they stay available.
|
*/

if (file_exists(__DIR__.'/../.env')) {

    try {
        \Dotenv::makeMutable();
        \Dotenv::load(__DIR__.'/../');
        \Dotenv::required('APP_ENV');
    } catch (\InvalidArgumentException $e) {
        //
    }

    /*
    |--------------------------------------------------------------------------
    | Detect The Application Environment
    |--------------------------------------------------------------------------
    |
    | Narrowspark takes a dead simple approach to your application environments
    | so you can just specify a machine name for the host that matches a
    | given environment, then we will automatically detect it for you.
    |
    */
    $app->detectEnvironment(function () {
        return \Dotenv::findEnvironmentVariable('APP_ENV') ?: 'production';
    });
}
