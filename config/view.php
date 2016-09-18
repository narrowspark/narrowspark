<?php

return [
    'view' => [
        'file_extensions' => [
        ],
        'template' => [
            'default' => realpath(__DIR__.'/../resources/views'),

            'paths' => [
                realpath(__DIR__.'/../resources/views/error'),
            ],
        ],

        'engine' => [
            'plates' => [
                'asset'      => null,
                'extensions' => [
                ],
                'file_extension' => 'plates.php',
            ],
            'twig' => [
                'extensions' => [
                ],
                'options' => [
                    'debug' => true,
                    'cache' => realpath(__DIR__.'/../storage/framework/views'),
                ],
            ],
        ],

        // 'compilers' => [
        // ],
    ],
];
