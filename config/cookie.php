<?php
declare(strict_types=1);

return [
    'viserio' => [
        'cookie' => [
            /*
            |--------------------------------------------------------------------------
            | Cookie Path
            |--------------------------------------------------------------------------
            |
            | The cookie path determines the path for which the cookie will
            | be regarded as available. Typically, this will be the root path of
            | your application but you are free to change this when necessary.
            |
            */
            'path'   => env('COOKIE_PATH', '/'),

            'domain' => env('COOKIE_DOMAIN', 'null'),
        ],
    ],
];
