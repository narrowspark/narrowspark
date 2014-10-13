<?php
/**
 * Narrowspark - a PHP 5 framework
 *
 * @author      Daniel Bannert <info@anolilab.de>
 * @copyright   2014 Daniel Bannert
 * @link        http://www.narrowspark.de
 * @license     http://www.narrowspark.com/license
 * @version     0.9.3-dev
 * @package     Narrowspark/framework
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Narrowspark is an open source PHP 5 framework, based on the Slim framework.
 *
 */

/**
 * Http config
 *
 * @package Narrowspark/narrowspark
 * @author  Daniel Bannert
 * @since   0.9.3-dev
 *
 */
return [

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, the application will only work if
    | the server has a HTTPS connection.
    |
    */

    'https' => false,

    /*
    |--------------------------------------------------------------------------
    | HTTP Version
    |--------------------------------------------------------------------------
    |
    | Change the http version of the application.
    |
    */

    'version' => '1.1',

    /*
    |--------------------------------------------------------------------------
    | Json
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'json.option' => '0',

    /*
    |--------------------------------------------------------------------------
    | Routes Escape
    |--------------------------------------------------------------------------
    |
    | Escape special chars on route marching
    | example as /v2.1/ matches /v2.1/, /v2a1/, /v2b1/ and so on...
    |
    */

    'route.escape' => false,

    /*
    |--------------------------------------------------------------------------
    | Routes Case Sensitive
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'route.case_sensitive' => true,

    /*
    |--------------------------------------------------------------------------
    | Routes Contex
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'route.context' => null,

    /*
    |--------------------------------------------------------------------------
    | Routes Class
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'route.class' => '\Brainwave\Routing\Route',

    /*
    |--------------------------------------------------------------------------
    | Callable Resolver
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

   'callable.resolver' => 'CallableResolver',
];
