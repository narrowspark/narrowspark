<?php
declare(strict_types=1);

return [
    'viserio' => [
        'view' => [
            /*
            |--------------------------------------------------------------------------
            | View Storage Paths
            |--------------------------------------------------------------------------
            |
            | Most templating systems load templates from disk. Here you may specify
            | an array of paths that should be checked for your views. Of course
            | the usual Narrowspark view path has already been registered for you.
            |
            */
            'paths' => [
                realpath(__DIR__ . '/../resources/views'),
            ],

            /*
            |--------------------------------------------------------------------------
            | View Engines Options
            |--------------------------------------------------------------------------
            |
            | Most template engines needs some custom configuration. If you miss your
            | favorite template engine, just add it. Is really easy.
            |
            | Supported: "twig", "file", "php", "markdown"
            */
            'engines' => [
                'twig' => [
                    'options' => [
                        'debug' => true,
                        'cache' => realpath(__DIR__ . '/../storage/framework/views'),
                    ],
                ],
            ],
        ],
    ],
];
