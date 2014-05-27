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
 * Database config
 *
 * @package Narrowspark/narrowspark
 * @author  Daniel Bannert
 * @since   0.8.0-dev
 *
 */
$config = array(
    'db.options' => array(
        'dsn'      => 'mysql:host='.getenv('DB_HOST').';dbname='.getenv('DB_DATABASE_NAME'),
        'username' => getenv('DB_DATABASE_USER'),
        'password' => getenv('DB_DATABASE_PASSWORD'),
        'frozen'   => getenv('DB_DATABASE_FROZEN'),
    )
);
