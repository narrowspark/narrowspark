<?php
declare(strict_types=1);

return [
    'viserio' => [
        'log' => [
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
            'env' => env('APP_ENV', 'develop'),

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
            'handler'   => 'daily',

            'level'     => 'debug',

            'max_files' => 5,
        ],
    ],
];
