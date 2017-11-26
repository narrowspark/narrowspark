<?php
declare(strict_types=1);

use App\Http\Kernel;
use Narrowspark\HttpEmitter\EmitterInterface;
use Narrowspark\HttpEmitter\Util as EmitterUtil;
use Viserio\Component\Http\Util;
use Viserio\Component\HttpFactory\ServerRequestFactory;

define('NARROWSPARK_START', microtime(true));

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

require_once dirname(__DIR__) . '/vendor/autoload.php';

/*
|---------------------------------------------------------------
| DEFAULT INI SETTINGS
|---------------------------------------------------------------
|
| Hosts have a habit of setting stupid settings for various
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
| Turn On The Lights
|--------------------------------------------------------------------------
|
| So let's turn on the lights.
| This bootstraps the framework and gets it ready for use.
|
*/

$kernel = new Kernel();

$serverRequest = (new ServerRequestFactory())->createServerRequestFromArray($_SERVER);
$serverRequest->withCookieParams($_COOKIE)
    ->withQueryParams($_GET)
    ->withParsedBody($_POST)
    ->withUploadedFiles(Util::normalizeFiles($_FILES));

$response = $kernel->handle($serverRequest);

$kernel->getContainer()->get(EmitterInterface::class)->emit($response);

if (function_exists('fastcgi_finish_request')) {
    fastcgi_finish_request();
} elseif ('cli' !== PHP_SAPI) {
    EmitterUtil::closeOutputBuffers(0, true);
}

$kernel->terminate($serverRequest, $response);
