<?php

use \Brainwave\Application\AliasLoader;
use \Brainwave\Application\Application;
use \Brainwave\Support\AutoLoader;

/*
|--------------------------------------------------------------------------
| Set PHP Error Reporting Options
|--------------------------------------------------------------------------
|
| Here we will set the strictest error reporting options, and also turn
| off PHP's error reporting, since all errors will be handled by the
| framework and we don't want any output leaking back to the user.
|
*/

require __DIR__.'/environment.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let's turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight these users.
|
*/

$app = new Application(require __DIR__.'/paths.php');

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

/*
|--------------------------------------------------------------------------
| Register Application Exception Handling
|--------------------------------------------------------------------------
|
| We will go ahead and register the application exception handling here
| which will provide a great output of exception details and a stack
| trace in the case of exceptions while an application is running.
|
*/

$app['exception']->register(getenv('APP_ENV'));

/*
|--------------------------------------------------------------------------
| Register The Alias Loader
|--------------------------------------------------------------------------
|
| The alias loader is responsible for lazy loading the class aliases setup
| for the application. We will only register it if the "config" service
| is bound in the application since it contains the alias definitions.
|
*/

AliasLoader::getInstance($app->get('config')->get('services::aliases', []))->register();

/*
|---------------------------------------------------------------
| DEFAULT INI SETTINGS
|---------------------------------------------------------------
|
| Hosts have a habbit of setting stupid settings for various
| things. These settings should help provide maximum compatibility
| for Brainwave
|
*/

// Let's hold Windows' hand and set a include_path in case it forgot
set_include_path(dirname(__FILE__));

// Some hosts (was it GoDaddy? complained without this
@ini_set('cgi.fix_pathinfo', 0);

/*
|--------------------------------------------------------------------------
| Set The Default Timezone
|--------------------------------------------------------------------------
|
| Here we will set the default timezone for PHP. PHP is notoriously mean
| if the timezone is not explicitly set. This will be used by each of
| the PHP date and date-time functions throughout the application.
|
*/

date_default_timezone_set($app->get('config')->get('app::timezone', 'UTC'));

mb_internal_encoding('UTF-8');

/*
|--------------------------------------------------------------------------
| Register The Narrowspark Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Narrowspark class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

AutoLoader::addDirectories(
    $app->get('config')->get('autoload::autoloaded.paths', [
        $app->path().'/Commands',
        $app->path().'/Http/Controllers',
        $app->path().'/Http/Middleware',
        $app->path().'/Providers',
        $app->databasePath().'/Models',
    ])
);

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can simply call the run method,
| which will execute the request and send the response back to
| the client's browser allowing them to enjoy the creative
| and wonderful applications we have created for them.
|
*/

return $app;
