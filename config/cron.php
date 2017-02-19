<?php
declare(strict_types=1);

return [
    'viserio' => [
        'cron' => [
            'env'         => env('APP_ENV', 'develop'),
            'maintenance' => '',
            'path'        => __DIR__,
            'mutex_path'  => __DIR__ . '/../storage/framework/cron',
            'console'     => 'cerebro',
        ],
    ],
];
