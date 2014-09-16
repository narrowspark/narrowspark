<?php
/**
 * Narrowspark - a PHP 5 framework
 *
 * @author      Daniel Bannert <info@anolilab.de>
 * @copyright   2014 Daniel Bannert
 * @link        http://www.narrowspark.de
 * @license     http://www.narrowspark.com/license
 * @version     0.9.1-dev
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

    'services.providers' => array(
        '\Brainwave\View\ViewServiceProvider'                       => array(),
        '\Brainwave\Crypt\CryptServiceProvider'                     => array(),
        '\Brainwave\Event\EventServiceProvider'                     => array(),
        '\Brainwave\Cache\CacheServiceProvider'                     => array(),
        '\Brainwave\Cookie\CookieServiceProvider'                   => array(),
        '\Brainwave\Session\SessionServiceProvider'                 => array(),
        '\Brainwave\Routing\RoutingServiceProvider'                 => array(),
        '\Brainwave\Translator\TranslatorServiceProvider'           => array(),
        '\Brainwave\Support\Autoloader\AutoloaderServiceProvider'   => array(),
    ),

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

    'services.aliases' => array(
        'App'           => '\Brainwave\Support\Facades\App',
        'Log'           => '\Brainwave\Support\Facades\Log',
        'Mail'          => '\Brainwave\Support\Facades\Mail',
        'View'          => '\Brainwave\Support\Facades\View',
        'Trans'         => '\Brainwave\Support\Facades\Trans',
        'Event'         => '\Brainwave\Support\Facades\Event',
        'Route'         => '\Brainwave\Support\Facades\Route',
        'Cookie'        => '\Brainwave\Support\Facades\Cookie',
        'Config'        => '\Brainwave\Support\Facades\Config',
        'Request'       => '\Brainwave\Support\Facades\Request',
        'Resource'      => '\Brainwave\Support\Facades\Resource',
        'Response'      => '\Brainwave\Support\Facades\Response',
        'Services'      => '\Brainwave\Support\Facades\Services',
        'Autoloader'    => '\Brainwave\Support\Facades\Autoloader'
    ),

);
