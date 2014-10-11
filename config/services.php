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
return array(

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

    'services.providers' => [
        '\Brainwave\View\ViewServiceProvider'                       => [],
        '\Brainwave\Log\LoggerServiceProvider'                      => [],
        '\Brainwave\Crypt\CryptServiceProvider'                     => [],
        '\Brainwave\Event\EventServiceProvider'                     => [],
        '\Brainwave\Cache\CacheServiceProvider'                     => [],
        '\Brainwave\Cookie\CookieServiceProvider'                   => [],
        '\Brainwave\Support\SupportServiceProvider'                 => [],
        '\Brainwave\Session\SessionServiceProvider'                 => [],
        '\Brainwave\Routing\RoutingServiceProvider'                 => [],
        '\Brainwave\Database\DatabaseServiceProvider'               => [],
        '\Brainwave\Resolvers\ResolverServiceProvider'              => [],
        '\Brainwave\Translator\TranslatorServiceProvider'           => [],
        '\Brainwave\Support\Filesystem\FilesystemServiceProvider'   => [],
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

    'services.aliases' => [
        'DB'            => '\Brainwave\Support\Facades\Database',
        'App'           => '\Brainwave\Support\Facades\App',
        'Log'           => '\Brainwave\Support\Facades\Log',
        'Mail'          => '\Brainwave\Support\Facades\Mail',
        'View'          => '\Brainwave\Support\Facades\View',
        'Trans'         => '\Brainwave\Support\Facades\Trans',
        'Cache'         => '\Brainwave\Support\Facades\Cache',
        'Event'         => '\Brainwave\Support\Facades\Event',
        'Route'         => '\Brainwave\Support\Facades\Route',
        'Query'         => '\Brainwave\Support\Facades\Query',
        'Cookie'        => '\Brainwave\Support\Facades\Cookie',
        'Config'        => '\Brainwave\Support\Facades\Config',
        'Caches'        => '\Brainwave\Support\Facades\Caches',
        'Helpers'       => '\Brainwave\Support\Facades\Helpers',
        'Request'       => '\Brainwave\Support\Facades\Request',
        'Resource'      => '\Brainwave\Support\Facades\Resource',
        'Response'      => '\Brainwave\Support\Facades\Response',
        'Services'      => '\Brainwave\Support\Facades\Services',
        'Autoloader'    => '\Brainwave\Support\Facades\Autoloader'
    ],
);
