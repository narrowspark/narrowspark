<?php
declare(strict_types=1);

return [
    'viserio' => [
        'console' => [
            'version' => env('APP_VERSION', '1.0.0'),

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
        ],
    ],
];
