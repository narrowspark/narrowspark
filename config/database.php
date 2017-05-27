<?php
declare(strict_types=1);

return [
    'viserio' => [
        'doctrine' => [
            'default'     => env('DB_CONNECTION', 'mysql'),
            'connections' => [
                'sqlite' => [
                    'driver' => 'pdo_sqlite',
                    // 'username' => env('DB_DATABASE_USER'),
                    // 'password' => env('DB_DATABASE_PASSWORD'),
                    'database' => env('DB_DATABASE', __DIR__ . '/../database/database.sqlite'),
                    'memory'   => true,
                ],

                'mysql' => [
                    'driver'        => 'pdo_mysql',
                    'host'          => env('DB_HOST'),
                    'port'          => env('DB_PORT', '3306'),
                    'database'      => env('DB_DATABASE_NAME', 't'),
                    'username'      => env('DB_DATABASE_USER'),
                    'password'      => env('DB_DATABASE_PASSWORD'),
                    'charset'       => env('DB_CHARSET', 'UTF8'),
                    'driverOptions' => [1002 => 'SET NAMES utf8'],
                ],
            ],
            'migrations' => [
                'path'      => env('DB_MIGRATION_PATH', __DIR__ . '/../database/migrations/'),
                'namespace' => 'Database\\Migrations',
                //'name' => '',
                //'table_name' => '',
            ],
        ],
    ],
];
