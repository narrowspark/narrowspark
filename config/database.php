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
 * All database work in Narrowspark is done through the PHP PDO facilities
 * so make sure you have the driver for your particular database of
 * choice installed on your machine before you begin development.
 *
 * Database config
 *
 * @package Narrowspark/narrowspark
 * @author  Daniel Bannert
 * @since   0.8.0-dev
 *
 */
return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => \PDO::FETCH_CLASS,

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
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
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
    | SqlServer         = sqlsrv
    |
    */

    'default'      => (getenv('DB_DATABASE_TYPE') !== false) ? strtolower(getenv('DB_DATABASE_TYPE')) : 'mysql',

    /*
    |--------------------------------------------------------------------------
    | Database option
    |--------------------------------------------------------------------------
    |
    |
    */

    'option'    => [],

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Narrowspark is shown below to make development simple.
    |
    |
    | All database work in Narrowspark is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'dbname'   => (getenv('DB_DATABASE_NAME') !== false) ?
                        getenv('DB_DATABASE_NAME') :
                        __DIR__.'/../database/production.sqlite',
            'prefix'   => '',
        ],

        'mysql' => [
            'driver'    => 'mysql',
            'server'    => (getenv('DB_HOST') !== false) ? strtolower(getenv('DB_HOST')) : 'localhost',
            'dbname'    => (getenv('DB_DATABASE_NAME') !== false) ? getenv('DB_DATABASE_NAME') : '',
            'username'  => (getenv('DB_DATABASE_USER') !== false) ? getenv('DB_DATABASE_USER') : '',
            'password'  => (getenv('DB_DATABASE_PASSWORD') !== false) ? getenv('DB_DATABASE_PASSWORD') : '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],

        'mariadb' => [
            'driver'    => 'mariadb',
            'server'    => (getenv('DB_HOST') !== false) ? strtolower(getenv('DB_HOST')) : 'localhost',
            'dbname'    => (getenv('DB_DATABASE_NAME') !== false) ? getenv('DB_DATABASE_NAME') : '',
            'username'  => (getenv('DB_DATABASE_USER') !== false) ? getenv('DB_DATABASE_USER') : '',
            'password'  => (getenv('DB_DATABASE_PASSWORD') !== false) ? getenv('DB_DATABASE_PASSWORD') : '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],

        'pgsql' => [
            'driver'   => 'pgsql',
            'server'   => (getenv('DB_HOST') !== false) ? strtolower(getenv('DB_HOST')) : 'localhost',
            'dbname'   => (getenv('DB_DATABASE_NAME') !== false) ? getenv('DB_DATABASE_NAME') : '',
            'username' => (getenv('DB_DATABASE_USER') !== false) ? getenv('DB_DATABASE_USER') : '',
            'password' => (getenv('DB_DATABASE_PASSWORD') !== false) ? getenv('DB_DATABASE_PASSWORD') : '',
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'server'   => (getenv('DB_HOST') !== false) ? strtolower(getenv('DB_HOST')) : 'localhost',
            'dbname'   => (getenv('DB_DATABASE_NAME') !== false) ? getenv('DB_DATABASE_NAME') : '',
            'username' => (getenv('DB_DATABASE_USER') !== false) ? getenv('DB_DATABASE_USER') : 'root',
            'password' => (getenv('DB_DATABASE_PASSWORD') !== false) ? getenv('DB_DATABASE_PASSWORD') : '',
            'prefix'   => '',
        ],

        'mssql' => [
            'driver' => 'mssql',
            'server'   => (getenv('DB_HOST') !== false) ? strtolower(getenv('DB_HOST')) : 'localhost',
            'dbname'   => (getenv('DB_DATABASE_NAME') !== false) ? getenv('DB_DATABASE_NAME') : '',
            'username' => (getenv('DB_DATABASE_USER') !== false) ? getenv('DB_DATABASE_USER') : 'root',
            'password' => (getenv('DB_DATABASE_PASSWORD') !== false) ? getenv('DB_DATABASE_PASSWORD') : '',
            'prefix'   => '',
        ],

        'oracle' => [
            'driver' => 'oracle',
        ],

        'sybase' => [
            'driver' => 'sybase',
        ],

        'cloudsql' => [
            'driver' => 'cloudsql',
            'server'   => (getenv('DB_HOST') !== false) ? strtolower(getenv('DB_HOST')) : 'localhost',
            'dbname'   => (getenv('DB_DATABASE_NAME') !== false) ? getenv('DB_DATABASE_NAME') : '',
            'username' => (getenv('DB_DATABASE_USER') !== false) ? getenv('DB_DATABASE_USER') : 'root',
            'password' => (getenv('DB_DATABASE_PASSWORD') !== false) ? getenv('DB_DATABASE_PASSWORD') : '',
            'prefix'   => '',
        ]
    ]
];
