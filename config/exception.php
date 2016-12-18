<?php
declare(strict_types=1);
use Viserio\Exception\Displayers\WhoopsDisplayer;

return [
    'exception' => [
        'default' => WhoopsDisplayer::class,

        'filters' => [],

        'levels' => [
            Twig_Error_Loader::class => 'error',
        ],
    ],
];
