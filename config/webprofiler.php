<?php
declare(strict_types=1);

return [
    'viserio' => [
        'webprofiler' => [
            'enable'         => true,
            'jquery_is_used' => false,

            // Logs settings
            'logs_storages'  => [],

            'collectors' => [
            ],

            'collector' => [
                'viserio_http' => true,
                'view' => [
                    'collect_data' => true,
                ],
                'narrowspark' => true,
                'files' => false,
                'ajax' => true,
                'translation' => true,
                'events' => true,
                'twig' => true,
                'routes' => true,
            ],
        ],
    ]
];
