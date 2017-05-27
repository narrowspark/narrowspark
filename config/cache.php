<?php
declare(strict_types=1);

return [
    'viserio' => [
        'cache' => [
            /*
            |--------------------------------------------------------------------------
            | Default Cache Store
            |--------------------------------------------------------------------------
            |
            | This option controls the default cache connection that gets used while
            | using this caching library. This connection is used when another is
            | not explicitly specified when executing a given caching function.
            |
            | Supported: "array", "database", "file", "memcached", "redis", "mongodb"
            |
            */
            'default' => env('CACHE_DRIVER', 'file'),

            /*
            |--------------------------------------------------------------------------
            | Cache Drivers
            |--------------------------------------------------------------------------
            |
            | Here you may define all of the cache "stores" for your application as
            | well as their drivers. You may even define multiple drivers for the
            | same cache driver to group types of items stored in your caches.
            |
            */
            'drivers' => [],

            /*
            |--------------------------------------------------------------------------
            | Cache Namespaces
            |--------------------------------------------------------------------------
            |
            | There might be other applications utilizing in the same cache.
            | So, we'll specify a value to get a namespace to all our keys
            | so we can avoid collisions.
            |
            */
            'namespace' => false,
        ],
    ],
];
