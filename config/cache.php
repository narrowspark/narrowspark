<?php

/**
 * Narrowspark - a PHP 5 framework.
 *
 * @author      Daniel Bannert <info@anolilab.de>
 * @copyright   2014 Daniel Bannert
 *
 * @link        http://www.narrowspark.de
 *
 * @license     http://www.narrowspark.com/license
 *
 * @version     0.9.4-dev
 */

use Brainwave\Support\Helper as H;

/*
 * Cache config
 *
 * @package Narrowspark/narrowspark
 * @author  Daniel Bannert
 * @since   0.8.0-dev
 *
 */
return [

    /*
    |--------------------------------------------------------------------------
    | Supported Cache Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the supported cache "drivers" that will be used when
    | using the Caching library.
    |
    */

    'supported.drivers' => [
        'apc'       => '\\Brainwave\\Cache\\Driver\\ApcCache',
        'array'     => '\\Brainwave\\Cache\\Driver\\ArrayCache',
        'file'      => '\\Brainwave\\Cache\\Driver\\FileCache',
        'memcache'  => '\\Brainwave\\Cache\\Driver\\MemcacheCache',
        'memcached' => '\\Brainwave\\Cache\\Driver\\MemcachedCache',
        'null'      => '\\Brainwave\\Cache\\Driver\\NullCache',
        'xcache'    => '\\Brainwave\\Cache\\Driver\\XcacheCache',
        'redis'     => '\\Brainwave\\Cache\\Driver\\RedisCache',
        'wincache'  => '\\Brainwave\\Cache\\Driver\\WincacheCache',
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Cache Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache "driver" that will be used when
    | using the Caching library. Of course, you may use other drivers any
    | time you wish. This is the default when another is not specified.
    |
    | Supported: "file", "null", "apc", "memcached", "redis", "array", "xcache", "wincache"
    |
    */

    'driver' => H::env('CACHE_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | File Cache Location
    |--------------------------------------------------------------------------
    |
    | When using the "file" cache driver, we need a location where the cache
    | files may be stored. A sensible default has been specified, but you
    | are free to change it to any other place on disk that you desire.
    |
    */

    'path' => H::storagePath('cache'),

    /*
    |--------------------------------------------------------------------------
    | Memcached Servers
    |--------------------------------------------------------------------------
    |
    | Now you may specify an array of your Memcached servers that should be
    | used when utilizing the Memcached cache driver. All of the servers
    | should contain a value for "host", "port", and "weight" options.
    |
    */

    'memcached' => [
        [
            'host'   => '127.0.0.1',
            'port'   => 11211,
            'weight' => 100,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Multiple caches
    |--------------------------------------------------------------------------
    |
    | This option controls the multiple cache "driver" that will be used when
    | using the Caching library. Now you may specify your multiple caches.
    |
    */

    'caches' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | When utilizing a RAM based store such as APC or Memcached, there might
    | be other applications utilizing the same  So, we'll specify a
    | value to get prefixed to all our keys so we can avoid collisions.
    |
    */

    'prefix' => 'narrowspark',
];
