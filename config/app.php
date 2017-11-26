<?php
declare(strict_types=1);

return [
    'viserio' => [
        'app' => [
            /*
            |--------------------------------------------------------------------------
            | Application Name
            |--------------------------------------------------------------------------
            |
            | This value is the name of your application. This value is used when the
            | framework needs to place the application's name in a notification or
            | any other location as required by the application or its packages.
            */
            'name' => env('APP_NAME', 'Narrowspark'),

            'version' => env('APP_VERSION', '1.0.0'),

            /*
            |--------------------------------------------------------------------------
            | Application Environment
            |--------------------------------------------------------------------------
            |
            | This value determines the "environment" your application is currently
            | running in. This may determine how you prefer to configure various
            | services your application utilizes. Set this in your ".env" file.
            |
            */
            'env'  => env('APP_ENV', 'production'),

            /*
            |--------------------------------------------------------------------------
            | Application URL
            |--------------------------------------------------------------------------
            |
            | This URL is used by the console to properly generate URLs when using
            | the Cerebro command line tool. You should set this to the root of
            | your application so that it is used when running Cerebro tasks.
            |
            */
            'url' => env('APP_URL', 'http://localhost'),

            /*
            |--------------------------------------------------------------------------
            | Logging Configuration
            |--------------------------------------------------------------------------
            |
            | Here you may configure the log settings for your application. Out of
            | the box, Viserio Log uses the Monolog PHP logging library. This gives
            | you a variety of powerful log handlers / formatters to utilize.
            |
            | Available Settings: "single", "daily", "syslog", "errorlog"
            |
            */
            'log' => [
                'handler'   => 'daily',

                'level'     => 'debug',

                'max_files' => 5,
            ],

            /*
            |--------------------------------------------------------------------------
            | Application Timezone
            |--------------------------------------------------------------------------
            |
            | Here you may specify the default timezone for your application, which
            | will be used by the PHP date and date-time functions. We have gone
            | ahead and set this to a sensible default for you out of the box.
            |
            */
            'timezone' => 'UTC',
        ],
    ],
];
