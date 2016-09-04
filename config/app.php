<?php

return [
    'app' => [
        'timezone' => 'UTC',

        'aliases' => [
            'Config' => Viserio\Config\Proxies\Config::class,
            'Route'  => Viserio\Routing\Proxies\Route::class,
        ],
    ],
];
