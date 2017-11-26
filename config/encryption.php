<?php
declare(strict_types=1);

return [
    'viserio' => [
        'encryption' => [
            /*
            |--------------------------------------------------------------------------
            | Encryption Key
            |--------------------------------------------------------------------------
            |
            | This key is used by the Viserio encryption service and should be set
            | using encryption key:generate command. Please do this before deploying
            | an application!
            |
            */
            'key_path' => env('ENCRYPTION_KEY_PATH'),

            'password_key_path' => env('ENCRYPTION_PASSWORD_KEY_PATH'),
        ],
    ],
];
