<?php
declare(strict_types=1);

return [
    'viserio' => [
        'view' => [
            'paths' => [
                realpath(__DIR__ . '/../resources/views'),
            ],

            'engines' => [
                'twig' => [
                    'options' => [
                        'debug' => true,
                        'cache' => realpath(__DIR__ . '/../storage/framework/views'),
                    ],
                ],
            ],
        ],
    ]
];
