<?php
/**
 * Narrowspark - a PHP 5 framework
 *
 * @author      Daniel Bannert <info@anolilab.de>
 * @copyright   2014 Daniel Bannert
 * @link        http://www.narrowspark.de
 * @license     http://www.narrowspark.com/license
 * @version     0.8.0-dev
 * @package     Narrowspark/framework
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Narrowspark is an open source PHP 5 framework, based on the Slim framework.
 *
 */

/**
 * Template config
 *
 * @package Narrowspark/narrowspark
 * @author  Daniel Bannert
 * @since   0.8.0-dev
 *
 */
$config = array(
    'view.template.paths' => array(
        // packages
        'packages' => dirname(dirname(dirname(__FILE__))).'/public/packages/',
        //public
        'public' => dirname(dirname(__FILE__)).'/views/public/',
        'admin' => dirname(dirname(__FILE__)).'/views/admin/',
        'error' => dirname(dirname(__FILE__)).'/views/error/',
        'login' => dirname(dirname(__FILE__)).'/views/login/',
        'email' => dirname(dirname(__FILE__)).'/views/emails/',
        'maintenance' => dirname(dirname(__FILE__)).'/views/maintenance/',
    ),
    'view.default.template.path' => dirname(dirname(__FILE__)).'/views',
    'view.cache' => array('cache' => dirname(dirname(__FILE__)).'/storage/views/'),
    'view.asset' => dirname(dirname(dirname(__FILE__))).'/public/assets'
);
