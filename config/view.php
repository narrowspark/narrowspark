<?php
/**
 * Narrowspark - a PHP 5 framework
 *
 * @author      Daniel Bannert <info@anolilab.de>
 * @copyright   2014 Daniel Bannert
 * @link        http://www.narrowspark.de
 * @license     http://www.narrowspark.com/license
 * @version     0.9.4-dev
 * @package     Narrowspark/framework
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Narrowspark is an open source PHP 5 framework.
 *
 */

use Brainwave\Support\Helper as H;

/**
 * Template config
 *
 * @package Narrowspark/narrowspark
 * @author  Daniel Bannert
 * @since   0.8.0-dev
 *
 */
return [

    /*
    |--------------------------------------------------------------------------
    | View Engine
    |--------------------------------------------------------------------------
    |
    | Of course the usual Brainave view engine has already been registered
    | for you.
    |
    */

    'engine' => [
        'plates' => '\Brainwave\View\Engines\Plates\PlatesEngine',
    ],

     /*
    |--------------------------------------------------------------------------
    | View Default Path
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an path that should be checked for your views. Of course
    | the usual Brainwave view path has already been registered for you.
    |
    */

    'template.paths' => [
        H::app('path.base').'/resources/views',
    ],

    /*
    |--------------------------------------------------------------------------
    | View Storage Path
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an path that should be checked for your  Of course
    | the usual Brainwave view path has already been registered for you.
    |
    */

    'cache' => ['cache' => H::app('path.base').'/storage/views'],

    /*
    |--------------------------------------------------------------------------
    | View Asset Path
    |--------------------------------------------------------------------------
    |
    | Of course the usual Brainwave view assets path has already been
    | registered for you.
    |
    */

    'asset' => H::app('path.public'),

    /*
    |--------------------------------------------------------------------------
    | View global Items
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'items' => [],
];
