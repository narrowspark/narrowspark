<?php

use \Brainwave\Workbench\Workbench;
use \Brainwave\Workbench\StaticalProxy;
use \Brainwave\Support\Autoloader\AutoLoader;

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

error_reporting(-1);

/*
|--------------------------------------------------------------------------
| Check Extensions
|--------------------------------------------------------------------------
|
| Narrowspark requires a few extensions to function. Here we will check the
| loaded extensions to make sure they are present. If not we'll just
| bail from here. Otherwise, Composer will crazily fall back code.
|
*/

if (!extension_loaded('mcrypt')) {
    $error = 'Mcrypt PHP extension required.'.PHP_EOL;
} elseif (!extension_loaded('mcrypt') && !class_exists('\RandomLib\Factory')) {
    $error = 'Mcrypt not found either \RandomLib\Factory, pls install Mcrypt or RandomLib';
}

if (!empty($error)) {
    echo $error;
    exit(1);
}

/*
|--------------------------------------------------------------------------
| Bind Paths
|--------------------------------------------------------------------------
|
| Here we are binding the paths configured in paths.php to the app. You
| should not be changing these here. If you need to change these you
| may do so within the paths.php file and they will be bound here.
|
*/

Workbench::bindInstallPaths(require __DIR__.'/paths.php');

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

$app = new Workbench();

/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Laravel takes a dead simple approach to your application environments
| so you can just specify a machine name for the host that matches a
| given environment, then we will automatically detect it for you.
|
*/

require __DIR__.'/environment.php';

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

$app['exception']->register();

if (getenv('APPLICATION_ENV') != 'testing') {
    ini_set('display_errors', 'Off');
}

/*
|--------------------------------------------------------------------------d33
| Load The Brainwave Facades
|--------------------------------------------------------------------------
|
| The facades provide a terser static interface over the various parts
| of the application, allowing their methods to be accessed through
| a mixtures of magic methods and facade derivatives. It's slick.
|
*/

StaticalProxy::clearResolvedInstances();

$app['statical']->registerFacade(
    $app['settings']->get('services.aliases', array())
)->registerAliases();

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

date_default_timezone_set($app['settings']->get('timezone', 'UTC'));

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
    $app['settings']->get('app.autoloaded.paths', array(
        realpath(__DIR__.'/../app').'/models',
        realpath(__DIR__.'/../app').'/routes',
        realpath(__DIR__.'/../app').'/global',
        realpath(__DIR__.'/../app').'/controllers',
    ))
);

/*
|--------------------------------------------------------------------------
| Register Booted Start Files
|--------------------------------------------------------------------------
|
| Once the application has been booted there are several "start" files
| we will want to include. We'll register our "booted" handler here
| so the files are included after the application gets booted up.
|
*/

$app->booted(function () use ($app, $env) {

    /*
    |--------------------------------------------------------------------------
    | Load The Environment Start Script
    |--------------------------------------------------------------------------
    |
    | The environment start script is only loaded if it exists for the app
    | environment currently active, which allows some actions to happen
    | in one environment while not in the other, keeping things clean.
    |
    */

    $path = $app['path']."/start/{$env}.php";

    if (file_exists($path)) {
        require $path;
    }

    /*
    |--------------------------------------------------------------------------
    | Load The Application Routes
    |--------------------------------------------------------------------------
    |
    | The Application routes are kept separate from the application starting
    | just to keep the file a little cleaner. We'll go ahead and load in
    | all of the routes now and return the application to the callers.
    |
    */

    $routes = $app['path'].'/routes.php';

    if (file_exists($routes)) {
        require $routes;
    }

});

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

$app->run();

/*
|--------------------------------------------------------------------------
| Shutdown The Application
|--------------------------------------------------------------------------
|
| Once the app has finished running, we will fire off the shutdown events
| so that any final work may be done by the application before we shut
| down the process. This is the last thing to happen to the request.
|
| Force connection close.
| Flush the output buffer.
|
*/

$app->shutdown();
