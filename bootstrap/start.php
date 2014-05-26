<?php

use \Brainwave\Workbench\Workbench;

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
$app['debug'] = true;
$app['mode'] = 'development';

/*
|--------------------------------------------------------------------------
| Environment
|--------------------------------------------------------------------------
|
| Detect the cresk environment
|
*/
foreach (require realpath(__DIR__.'/../').'/.environment' as $key => $value) {
    putenv(sprintf('%s=%s', $key, $value));
}

App::detectEnvironment(
    function () {
        return getenv('APPLICATION_ENV');
    }
);

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
App::bindInstallPaths(require __DIR__.'/paths.php');

/*
|---------------------------------------------------------------
| DEFAULT INI SETTINGS
|---------------------------------------------------------------
|
| Hosts have a habbit of setting stupid settings for various
| things. These settings should help provide maximum compatibility
| for CreskCms
|
*/

// Let's hold Windows' hand and set a include_path in case it forgot
set_include_path(dirname(__FILE__));

// Some hosts (was it GoDaddy? complained without this
@ini_set('cgi.fix_pathinfo', 0);

// PHP 5.3 will BITCH without this
if (ini_get('date.timezone') == '') {
    date_default_timezone_set('UTC');
}

App::configFiles();

// TODO
//App::add(App::make('firewall'));

/*
|--------------------------------------------------------------------------
| Install
|--------------------------------------------------------------------------
|
|
|
*/

require realpath(__DIR__.'/../app').'/routes.php';

/*
|--------------------------------------------------------------------------
| Setup Patchwork UTF-8 Handling
|--------------------------------------------------------------------------
|
| The Patchwork library provides solid handling of UTF-8 strings as well
| as provides replacements for all mb_* and iconv type functions that
| are not available by default in PHP. We'll setup this stuff here.
|
*/

Patchwork\Utf8\Bootup::initMbstring();

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
App::run();

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
App::shutdown();
