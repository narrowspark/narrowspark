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
            | using defuse key, otherwise these encrypted strings will not be safe.
            | Please do this before deploying an application!
            |
            */
            'key' => env('APP_KEY'),
        ],
    ],
];
