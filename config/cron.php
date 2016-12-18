<?php
declare(strict_types=1);

return [
    'cron' => [
        'path'       => __DIR__,
        'mutex_path' => __DIR__ . '/../storage/framework/cron',
        'console'    => 'cerebro',
    ],
];
