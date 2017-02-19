<?php
declare(strict_types=1);
use App\Http\Kernel;
use Viserio\Component\Contracts\Foundation\Emitter as EmitterContract;
use Viserio\Component\Http\Util;
use Viserio\Component\HttpFactory\ServerRequestFactory;

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

require __DIR__ . '/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| So let's turn on the lights.
| This bootstraps the framework and gets it ready for use.
|
*/

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$serverRequest = (new ServerRequestFactory())->createServerRequest($_SERVER);
$serverRequest->withCookieParams($_COOKIE)
    ->withQueryParams($_GET)
    ->withParsedBody($_POST)
    ->withUploadedFiles(Util::normalizeFiles($_FILES));

$response = $kernel->handle($serverRequest);

$app->get(EmitterContract::class)->emit($response);
