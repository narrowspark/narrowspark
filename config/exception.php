<?php
declare(strict_types=1);

use Viserio\Component\Exception\Displayers\WhoopsDisplayer;

return [
    'viserio' => [
        'exception' => [
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
            | Application Debug Mode
            |--------------------------------------------------------------------------
            |
            | When your application is in debug mode, detailed error messages with
            | stack traces will be shown on every error that occurs within your
            | application. If disabled, a simple generic error page is shown.
            |
            */
            'debug' => env('APP_DEBUG', false),

            'default_displayer' => WhoopsDisplayer::class,

            'displayers' => [],

            // 'filters' => [],

            // 'transformers' => [],

            'dont_report' => [],

            'levels' => [
                Twig_Error_Loader::class => 'error',
            ],
        ],
    ],
];
