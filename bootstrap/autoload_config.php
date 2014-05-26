<?php

/*
|--------------------------------------------------------------------------
| Compiled Class
|--------------------------------------------------------------------------
|
| To dramatically increase your application's performance.
|
*/

require realpath(__DIR__.'/..').'/vendor/classpreloader/classpreloader/src/ClassPreloader/ClassLoader.php';

use \ClassPreloader\ClassLoader;

$config = ClassLoader::getIncludes(function(ClassLoader $loader) {
    require_once(realpath(__DIR__.'/..').'/vendor/autoload.php');
    $loader->register();
});

return $config;
