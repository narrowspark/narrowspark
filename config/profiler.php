<?php
declare(strict_types=1);

return [
    'viserio' => [
        'profiler' => [
            /*
            |--------------------------------------------------------------------------
            | Profiler Settings
            |--------------------------------------------------------------------------
            |
            | Profiler is enabled by default, when debug is set to true in app.php.
            | You can override the value by setting enable to true or false.
            |
            */
            'enable'         => env('APP_DEBUG', false),

            'jquery_is_used' => false,

            'logs_storages'  => [
                __DIR__ . '/../storage/logs/',
            ],

            'collectors' => [
            ],

            'collector' => [
                'viserio_http' => true,
                'view'         => [
                    'collect_data' => true,
                ],
                'narrowspark' => true,
                'files'       => false,
                'ajax'        => true,
                'translation' => true,
                'twig'        => true,
                'routes'      => true,
                'logs'        => true,
            ],
        ],
    ],
];
