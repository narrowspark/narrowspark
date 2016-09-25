<?php

use App\Http\Kernel;
use Viserio\Contracts\Events\Dispatcher as DispatcherContract;
use Viserio\Contracts\Foundation\Emitter as EmitterContract;
use Viserio\HttpFactory\ServerRequestFactory;
use Viserio\Routing\Router as RouterContract;

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

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

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = new Kernel(
    $app,
    $app->get(RouterContract::class),
    $app->get(DispatcherContract::class)
);

$response = $kernel->handle(
    $request = (new ServerRequestFactory())->createServerRequestFromGlobals()
);

$app->get(EmitterContract::class)->emit($response);
