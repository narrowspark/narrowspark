<?php
declare(strict_types=1);

return [
    'viserio' => [
        'translation' => [
            /*
            |--------------------------------------------------------------------------
            | Application Locale Configuration
            |--------------------------------------------------------------------------
            |
            | The application locale determines the default locale that will be used
            | by the translation service provider. You are free to set this value
            | to any of the locales which will be supported by the application.
            |
            */
            'locale' => 'en',

            /*
            |--------------------------------------------------------------------------
            | Application Fallback Locale
            |--------------------------------------------------------------------------
            |
            | The fallback locale determines the locale to use when the current one
            | is not available. You may change the value to correspond to any of
            | the language folders that are provided through your application.
            |
            */
            'fallback_locale' => 'en',

            'directories' => [
                dirname(__DIR__) . '/resources/lang/',
            ],

            'files' => [
                'en/messages.php',
            ],
        ],
    ],
];
