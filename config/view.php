<?php
declare(strict_types=1);

return [
    'view' => [
        'file_extensions' => [
            'php',
        ],
        'template' => [
            'default' => realpath(__DIR__ . '/../resources/views'),

            'paths' => [
                realpath(__DIR__ . '/../resources/views/error'),
            ],
        ],

        'engine' => [
            'plates' => [
                'asset'      => null,
                'extensions' => [
                ],
                'file_extension' => 'phtml',
            ],
            'twig' => [
                'extensions' => [
                ],
                'options' => [
                    'debug' => true,
                    'cache' => realpath(__DIR__ . '/../storage/framework/views'),
                ],
            ],
        ],
    ],
];
