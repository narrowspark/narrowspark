<?php

/**
 * Narrowspark - a PHP 5 framework.
 *
 * @author      Daniel Bannert <info@anolilab.de>
 * @copyright   2014 Daniel Bannert
 *
 * @link        http://www.narrowspark.de
 *
 * @license     http://www.narrowspark.com/license
 *
 * @version     1.0.2-dev
 */

use Brainwave\Support\Helper as H;

/**
 * Services config
 *
 * @author  Daniel Bannert
 *
 * @since   0.8.0-dev
 */
return [
    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [
        'Brainwave\Cache\Providers\CacheServiceProvider'                     => [],
        'Brainwave\Console\Providers\ConsoleServiceProvider'                 => [],
        'Brainwave\Cookie\Providers\CookieServiceProvider'                   => [],
        //'Brainwave\Database\Providers\DatabaseServiceProvider'               => [],
        'Brainwave\Encrypter\Providers\EncrypterServiceProvider'             => [],
        'Brainwave\Events\Providers\EventsServiceProvider'                   => [],
        'Brainwave\Hashing\Providers\HashingServiceProvider'                 => [],
        'Brainwave\Log\Providers\LoggerServiceProvider'                      => [],
        'Brainwave\Routing\Providers\RoutingServiceProvider'                 => [],
        'Brainwave\Session\Providers\SessionServiceProvider'                 => [],
        'Brainwave\Support\Providers\AutoloaderServiceProvider'              => [],
        'Brainwave\Support\Providers\SupportServiceProvider'                 => [],
        'Brainwave\Translator\Providers\TranslatorServiceProvider'           => [
            'translator.path' => H::app('path.config'),
        ],
        'Brainwave\View\Providers\ViewServiceProvider'                       => [],
    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [
        'DB'            => '\Brainwave\Database\Facades\Database',
        'App'           => '\Brainwave\Application\Facades\App',
        'Log'           => '\Brainwave\Log\Facades\Log',
        'Mail'          => '\Brainwave\Mail\Facades\Mail',
        'View'          => '\Brainwave\View\Facades\View',
        'Trans'         => '\Brainwave\Translator\Facades\Trans',
        'Cache'         => '\Brainwave\Cache\Facades\Cache',
        'Events'        => '\Brainwave\Events\Facades\Events',
        'Route'         => '\Brainwave\Routing\Facades\Route',
        'Query'         => '\Brainwave\Database\Facades\Query',
        'Cookie'        => '\Brainwave\Cookie\Facades\Cookie',
        'Config'        => '\Brainwave\Conifg\Facades\Config',
        'Caches'        => '\Brainwave\Caches\Facades\Caches',
        'Helper'        => '\Brainwave\Helpers\Facades\Helper',
        'Request'       => '\Brainwave\Http\Facades\Request',
        'Response'      => '\Brainwave\Http\Facades\Response',
        'Services'      => '\Brainwave\Application\Facades\Services',
        'Autoloader'    => '\Brainwave\Helpers\Facades\Autoloader',
    ],
];
