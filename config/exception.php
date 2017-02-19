<?php
declare(strict_types=1);
use Viserio\Component\Exception\Displayers\WhoopsDisplayer;

return [
    'viserio' => [
        'exception' => [
            'env' => env('APP_ENV', 'develop'),

            'debug' => false,

            'default_displayer' => WhoopsDisplayer::class,

            'displayers' => [],

            // 'filters' => [],

            // 'transformers' => [],

            'dont_report' => [],

            'levels' => [
                Twig_Error_Loader::class => 'error',
            ],
        ],
    ]
];
