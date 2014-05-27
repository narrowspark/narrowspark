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
        'packages' => realpath(__DIR__.'../../../public/packages/'),
        //public
        'public' => realpath(__DIR__.'../../../app/views/public/'),
        'admin' => realpath(__DIR__.'../../../app/views/admin/'),
        'error' => realpath(__DIR__.'../../../app/views/error/'),
        'login' => realpath(__DIR__.'../../../app/views/login/'),
        'email' => realpath(__DIR__.'../../../app/views/emails/'),
        'maintenance' => realpath(__DIR__.'../../../app/views/maintenance/'),
    ),
    'view.default.template.path' => realpath(__DIR__.'../../../app/views'),
    'view.cache' => array('cache' => realpath(__DIR__.'../../../app/storage/views/')),
    'view.asset' => realpath(__DIR__.'../../../public/assets')
);
