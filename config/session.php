<?php
declare(strict_types=1);

return [
    'viserio' => [
        'session' => [
            /*
            |--------------------------------------------------------------------------
            | Default Session Driver
            |--------------------------------------------------------------------------
            |
            | This option controls the default session "driver" that will be used on
            | requests. By default, we will use the lightweight native driver but
            | you may specify any of the other wonderful drivers provided here.
            |
            | Supported: "file", "cookie", "database", "mongodb",
            |            "memcached", "redis", "array"
            |
            */
            'default'          => env('SESSION_DRIVER', 'file'),

            /*
            |--------------------------------------------------------------------------
            | Application Environment
            |--------------------------------------------------------------------------
            |
            | This value determines the "environment" your application is currently
            | running in. This option will stop matching the CSRF token on tests.
            |
            */
            'env'              => env('APP_ENV', 'production'),

            /*
            |--------------------------------------------------------------------------
            | Session Lifetime
            |--------------------------------------------------------------------------
            |
            | Here you may specify the number of seconds that you wish the session
            | to be allowed to remain idle before it expires. If you want them
            | to immediately expire on the browser closing, set that option.
            |
            */
            'lifetime'         => 7200, // 2 hours

            'expire_on_close'  => false,

            /*
            |--------------------------------------------------------------------------
            | Session Encryption
            |--------------------------------------------------------------------------
            |
            | This option allows you to easily specify that all of your session data
            | should be encrypted before it is stored. All encryption will be run
            | automatically by Narrowspark and you can use the Session like normal.
            |
            */
            'encrypt'          => false,

            /*
            |--------------------------------------------------------------------------
            | Session Sweeping Lottery
            |--------------------------------------------------------------------------
            |
            | Some session drivers must manually sweep their storage location to get
            | rid of old sessions from storage. Here are the chances that it will
            | happen on a given request. By default, the odds are 2 out of 100.
            |
            */
            'lottery'          => [2, 100],

            /*
            |--------------------------------------------------------------------------
            | Session Cookie Path
            |--------------------------------------------------------------------------
            |
            | The session cookie path determines the path for which the cookie will
            | be regarded as available. Typically, this will be the root path of
            | your application but you are free to change this when necessary.
            |
            */
            'path'             => env('COOKIE_PATH', '/'),

            /*
            |--------------------------------------------------------------------------
            | Session Cookie Domain
            |--------------------------------------------------------------------------
            |
            | Here you may change the domain of the cookie used to identify a session
            | in your application. This will determine which domains the cookie is
            | available to in your application. A sensible default has been set.
            |
            */
            'domain'           => env('COOKIE_DOMAIN', null),

            /*
            |--------------------------------------------------------------------------
            | HTTPS Only Cookies
            |--------------------------------------------------------------------------
            |
            | By setting this option to true, session cookies will only be sent back
            | to the server if the browser has a HTTPS connection. This will keep
            | the cookie from being sent to you if it can not be done securely.
            |
            */
            'secure'           => null,

            /*
            |--------------------------------------------------------------------------
            | HTTP Access Only
            |--------------------------------------------------------------------------
            |
            | Setting this value to true will prevent JavaScript from accessing the
            | value of the cookie and the cookie will only be accessible through
            | the HTTP protocol. You are free to modify this option if needed.
            |
            */
            'http_only'        => true,

            /*
            |--------------------------------------------------------------------------
            | Session Cookie Same-site
            |--------------------------------------------------------------------------
            |
            | In the strict mode, the cookie is withheld with any cross-site usage.
            | Even when the user follows a link to another website the cookie is
            | not sent. In lax mode, some cross-site usage is allowed.
            |
            | Supported: "Lax", "Strict"
            |
            */
            'samesite'        => false,

            /*
            |--------------------------------------------------------------------------
            | Session Driver configuration
            |--------------------------------------------------------------------------
            |
            | When using the native session driver, we need a location where session
            | files may be stored. Some custom drivers need special configurations,
            | so you can configure them her.
            |
            */
            'drivers' => [
                'file' => [
                    'path' => __DIR__ . '/../storage/framework/sessions',
                ],
            ],
        ],
    ],
];
