<?php
/**
 * Narrowspark - a PHP 5 framework
 *
 * @author      Daniel Bannert <info@anolilab.de>
 * @copyright   2014 Daniel Bannert
 * @link        http://www.narrowspark.de
 * @license     http://www.narrowspark.com/license
 * @version     0.9.2-dev
 * @package     Narrowspark/framework
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Narrowspark is an open source PHP 5 framework, based on the Slim framework.
 *
 */

/**
 * Services config
 *
 * @package Narrowspark/narrowspark
 * @author  Daniel Bannert
 * @since   0.8.0-dev
 *
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
        '\Brainwave\View\ViewServiceProvider'                       => [],
        '\Brainwave\Log\LoggerServiceProvider'                      => [],
        '\Brainwave\Crypt\CryptServiceProvider'                     => [],
        '\Brainwave\Event\EventServiceProvider'                     => [],
        '\Brainwave\Cache\CacheServiceProvider'                     => [],
        '\Brainwave\Cookie\CookieServiceProvider'                   => [],
        //'\Brainwave\Console\ConsoleServiceProvider'                 => [],
        '\Brainwave\Support\SupportServiceProvider'                 => [],
        '\Brainwave\Session\SessionServiceProvider'                 => [],
        '\Brainwave\Routing\RoutingServiceProvider'                 => [],
        '\Brainwave\Support\FractalServiceProvider'                 => [],
        '\Brainwave\Database\DatabaseServiceProvider'               => [],
        '\Brainwave\Resolvers\ResolverServiceProvider'              => [],
        '\Brainwave\Filesystem\FilesystemServiceProvider'           => [],
        '\Brainwave\Support\Autoloader\AutoloaderServiceProvider'   => [],
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
        'DB'            => '\Brainwave\Workbench\Facades\Database',
        'App'           => '\Brainwave\Workbench\Facades\App',
        'Log'           => '\Brainwave\Workbench\Facades\Log',
        'Mail'          => '\Brainwave\Workbench\Facades\Mail',
        'View'          => '\Brainwave\Workbench\Facades\View',
        'Trans'         => '\Brainwave\Workbench\Facades\Trans',
        'Cache'         => '\Brainwave\Workbench\Facades\Cache',
        'Event'         => '\Brainwave\Workbench\Facades\Event',
        'Route'         => '\Brainwave\Workbench\Facades\Route',
        'Query'         => '\Brainwave\Workbench\Facades\Query',
        'Cookie'        => '\Brainwave\Workbench\Facades\Cookie',
        'Config'        => '\Brainwave\Workbench\Facades\Config',
        'Caches'        => '\Brainwave\Workbench\Facades\Caches',
        'Helpers'       => '\Brainwave\Workbench\Facades\Helpers',
        'Request'       => '\Brainwave\Workbench\Facades\Request',
        'Resource'      => '\Brainwave\Workbench\Facades\Resource',
        'Response'      => '\Brainwave\Workbench\Facades\Response',
        'Services'      => '\Brainwave\Workbench\Facades\Services',
        'Autoloader'    => '\Brainwave\Workbench\Facades\Autoloader'
    ],
];
