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
 * Database config
 *
 * @package Narrowspark/narrowspark
 * @author  Daniel Bannert
 * @since   0.8.0-dev
 *
 */
return array(

    /*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| All database work in Narrowspark is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/

    'db' => array(

        /*
        |--------------------------------------------------------------------------
        | Database frozen
        |--------------------------------------------------------------------------
        |
        |
        */

        'frozen'    => (getenv('DB_DATABASE_FROZEN') !== false) ? getenv('DB_DATABASE_FROZEN') : true,

        /*
        |--------------------------------------------------------------------------
        | Database type
        |--------------------------------------------------------------------------
        |
        | You can choose between
        |
        | MySQL             = mysql
        | MariaDB           = mariadb
        | MSSQL             = mssql
        | Sybase            = sybase
        | PostgreSQL        = sqlite
        | Oracle            = pgsql
        | Google Cloud SQL  = cloudsql
        | Sqlite            = sqlite
        |
        */

        'type'      => (getenv('DB_DATABASE_TYPE') !== false) ? strtolower(getenv('DB_DATABASE_TYPE')) : 'mysql',

        /*
        |--------------------------------------------------------------------------
        | Database server
        |--------------------------------------------------------------------------
        |
        |
        */

        'server'    => (getenv('DB_HOST') !== false) ? strtolower(getenv('DB_HOST')) : 'localhost',

        /*
        |--------------------------------------------------------------------------
        | Database port
        |--------------------------------------------------------------------------
        |
        |
        */

        'port'      => '3306',

        /*
        |--------------------------------------------------------------------------
        | Database dbname
        |--------------------------------------------------------------------------
        |
        |
        */

        'dbname'    => getenv('DB_DATABASE_NAME'),

        /*
        |--------------------------------------------------------------------------
        | Database username
        |--------------------------------------------------------------------------
        |
        |
        */

        'username'  => getenv('DB_DATABASE_USER'),

        /*
        |--------------------------------------------------------------------------
        | Database password
        |--------------------------------------------------------------------------
        |
        |
        */

        'password'  => getenv('DB_DATABASE_PASSWORD'),

        /*
        |--------------------------------------------------------------------------
        | Database charset
        |--------------------------------------------------------------------------
        |
        |
        */

        'charset'   => '',

        /*
        |--------------------------------------------------------------------------
        | Database option
        |--------------------------------------------------------------------------
        |
        |
        */

        'option'    => array(),
    )
);
