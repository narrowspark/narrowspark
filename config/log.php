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
        ],
    ],
];
