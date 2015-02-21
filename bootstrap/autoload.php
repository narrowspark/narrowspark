<?php

define('BRAINWAVE_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

if (function_exists('opcache_is_script_cached') && class_exists('\Intahwebz\Autoload\LowMemoryClassloader')) {
    require_once realpath(__DIR__.'/..').'/vendor/intahwebz/lowmemoryclassloader/LowMemoryClassloader.php';
} else {
    require_once realpath(__DIR__.'/..').'/vendor/autoload.php';
}

/*
|--------------------------------------------------------------------------
| Include The Compiled Class File
|--------------------------------------------------------------------------
|
| To dramatically increase your application's performance, you may use a
| compiled class file which contains all of the classes commonly used
| by a request.
|
*/

if (file_exists($compiled = __DIR__.'/storage/autoload/compiled.php')) {
    require $compiled;
}

/*
|--------------------------------------------------------------------------
| Register The Brainwave Loader
|--------------------------------------------------------------------------
|
| We register an auto-loader "behind" the Composer loader that can load
| model classes on the fly, even if the autoload files have not been
| regenerated for the application. We'll add it to the stack here.
|
*/

\Brainwave\Support\Autoloader::register();
