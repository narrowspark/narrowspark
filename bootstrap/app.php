<?php
declare(strict_types=1);
use App\Console\Kernel as ConsoleKernel;
use App\Http\Kernel as HttpKernel;
use Viserio\Component\Contracts\Console\Kernel as ConsoleKernelContract;
use Viserio\Component\Contracts\Foundation\Kernel as FoundationKernelContract;
use Viserio\Component\Foundation\Application;

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

$app = new Application(require __DIR__ . '/paths.php');

/*
|---------------------------------------------------------------
| DEFAULT INI SETTINGS
|---------------------------------------------------------------
|
| Hosts have a habbit of setting stupid settings for various
| things. These settings should help provide maximum compatibility
| for Narrowspark
|
*/

// Let's hold Windows' hand and set a include_path in case it forgot
set_include_path(__DIR__);

// Some hosts (was it GoDaddy? complained without this
@ini_set('cgi.fix_pathinfo', '0');

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    FoundationKernelContract::class,
    HttpKernel::class
);

$app->singleton(
    ConsoleKernelContract::class,
    ConsoleKernel::class
);

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
|
*/

return $app;
