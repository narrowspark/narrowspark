<?php
declare(strict_types=1);

return [
    'viserio' => [
        'staticalproxy' => [
            /*
            |--------------------------------------------------------------------------
            | Real Time Statical Proxy Cache Path
            |--------------------------------------------------------------------------
            |
            |
            |
            |
            |
            */
            'cache_path'      => null,

            /*
            |--------------------------------------------------------------------------
            | Real Time Statical Proxy
            |--------------------------------------------------------------------------
            |
            |
            |
            |
            |
            */
            'real_time_proxy' => true,

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
            'aliases'         => [
                'Bus'           => \Viserio\Component\Bus\Proxy\Bus::class,
                'Cache'         => \Viserio\Component\Cache\Proxy\Cache::class,
                'Config'        => \Viserio\Component\Config\Proxy\Config::class,
                'Console'       => \Viserio\Component\Console\Proxy\Console::class,
                'Cookie'        => \Viserio\Component\Cookie\Proxy\Cookie::class,
                'Dumper'        => \Viserio\Component\Parser\Proxy\Dumper::class,
                'Schedule'      => \Viserio\Component\Cron\Proxy\Schedule::class,
                'DB'            => \Viserio\Component\Database\Proxy\DB::class,
                'RequestCookie' => \Viserio\Component\Cookie\Proxy\RequestCookie::class,
                'Crypt'         => \Viserio\Component\Encryption\Proxy\Crypt::class,
                'Events'        => \Viserio\Component\Events\Proxy\Events::class,
                'Files'         => \Viserio\Component\Filesystem\Proxy\Files::class,
                'Storage'       => \Viserio\Component\Filesystem\Proxy\Storage::class,
                'App'           => \Viserio\Component\Foundation\Proxy\App::class,
                'Log'           => \Viserio\Component\Log\Proxy\Log::class,
                'Mail'          => \Viserio\Component\Mail\Proxy\Mail::class,
                'Parser'        => \Viserio\Component\Parser\Proxy\Parser::class,
                'Queue'         => \Viserio\Component\Queue\Proxy\Queue::class,
                'Route'         => \Viserio\Component\Routing\Proxy\Route::class,
                'Session'       => \Viserio\Component\Session\Proxy\Session::class,
                'SimpleCache'   => \Viserio\Component\Cache\Proxy\SimpleCache::class,
                'Lang'          => \Viserio\Component\Translation\Proxy\Lang::class,
                'Validator'     => \Viserio\Component\Validation\Proxy\Validator::class,
                'View'          => \Viserio\Component\View\Proxy\View::class,
            ],
        ]
    ]
];