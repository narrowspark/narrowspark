<?php

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
