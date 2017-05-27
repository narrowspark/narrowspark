<?php
declare(strict_types=1);

return [
    'viserio' => [
        'app' => [
            /*
            |--------------------------------------------------------------------------
            | Application Name
            |--------------------------------------------------------------------------
            |
            | This value is the name of your application. This value is used when the
            | framework needs to place the application's name in a notification or
            | any other location as required by the application or its packages.
            */
            'name' => env('APP_NAME', 'Narrowspark'),

            /*
            |--------------------------------------------------------------------------
            | Application Environment
            |--------------------------------------------------------------------------
            |
            | This value determines the "environment" your application is currently
            | running in. This may determine how you prefer to configure various
            | services your application utilizes. Set this in your ".env" file.
            |
            */
            'env'  => env('APP_ENV', 'production'),

            /*
            |--------------------------------------------------------------------------
            | Application Debug Mode
            |--------------------------------------------------------------------------
            |
            | When your application is in debug mode, detailed error messages with
            | stack traces will be shown on every error that occurs within your
            | application. If disabled, a simple generic error page is shown.
            |
            */
            'debug' => env('APP_DEBUG', false),

            /*
            |--------------------------------------------------------------------------
            | Application Timezone
            |--------------------------------------------------------------------------
            |
            | Here you may specify the default timezone for your application, which
            | will be used by the PHP date and date-time functions. We have gone
            | ahead and set this to a sensible default for you out of the box.
            |
            */
            'timezone' => 'UTC',

            /*
            |--------------------------------------------------------------------------
            | Class Aliases
            |--------------------------------------------------------------------------
            |
            | This array of class aliases will be registered when this application
            | is started. However, feel free to register as many as you wish as
            | the aliases are "lazy" loaded so they don't hinder performance.
            |
            */
            'aliases' => [
                'Bus'           => Viserio\Component\Bus\Proxies\Bus::class,
                'Cache'         => Viserio\Component\Cache\Proxies\Cache::class,
                'Config'        => Viserio\Component\Config\Proxies\Config::class,
                'Console'       => Viserio\Component\Console\Proxies\Console::class,
                'Cookie'        => Viserio\Component\Cookie\Proxies\Cookie::class,
                'Schedule'      => Viserio\Component\Cron\Proxies\Schedule::class,
                'DB'            => Viserio\Component\Database\Proxies\DB::class,
                'RequestCookie' => Viserio\Component\Cookie\Proxies\RequestCookie::class,
                'Crypt'         => Viserio\Component\Encryption\Proxies\Crypt::class,
                'Events'        => Viserio\Component\Events\Proxies\Events::class,
                'Files'         => Viserio\Component\Filesystem\Proxies\Files::class,
                'Storage'       => Viserio\Component\Filesystem\Proxies\Storage::class,
                'App'           => Viserio\Component\Foundation\Proxies\App::class,
                'Password'      => Viserio\Component\Hashing\Proxies\Password::class,
                'Log'           => Viserio\Component\Log\Proxies\Log::class,
                'Mail'          => Viserio\Component\Mail\Proxies\Mail::class,
                'Parser'        => Viserio\Component\Parsers\Proxies\Parser::class,
                'Pipeline'      => Viserio\Component\Pipeline\Proxies\Pipeline::class,
                'Queue'         => Viserio\Component\Queue\Proxies\Queue::class,
                'Route'         => Viserio\Component\Routing\Proxies\Route::class,
                'Session'       => Viserio\Component\Session\Proxies\Session::class,
                'SimpleCache'   => Viserio\Component\Cache\Proxies\SimpleCache::class,
                'Lang'          => Viserio\Component\Translation\Proxies\Lang::class,
                'Validator'     => Viserio\Component\Validation\Proxies\Validator::class,
                'View'          => Viserio\Component\View\Proxies\View::class,
            ],
        ],
    ],
];
