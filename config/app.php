<?php

return [
    'app' => [
        'env' => env('APP_ENV', 'develop'),

        'timezone' => 'UTC',

        'log'       => 'single',
        'log_level' => 'debug',

        'serviceprovider' => [
            Viserio\Bus\Providers\QueueingBusServiceProvider::class,
            Viserio\Cache\Providers\CacheServiceProvider::class,
            Viserio\Connect\Providers\ConnectManagerServiceProvider::class,
            Viserio\Console\Providers\ConsoleServiceProvider::class,
            Viserio\Cookie\Providers\CookieServiceProvider::class,
            Viserio\Encryption\Providers\EncrypterServiceProvider::class,
            Viserio\Filesystem\Providers\FilesServiceProvider::class,
            Viserio\Hashing\Providers\HashingServiceProvider::class,
            Viserio\Pipeline\Providers\PipelineServiceProvider::class,
            Viserio\Routing\Providers\RoutingServiceProvider::class,
            Viserio\Session\Providers\SessionServiceProvider::class,
            Viserio\StaticalProxy\Providers\AliasLoaderServiceProvider::class,
            Viserio\StaticalProxy\Providers\StaticalProxyServiceProvider::class,
            Viserio\Translation\Providers\TranslatorServiceProvider::class,
            Viserio\Validation\Providers\ValidationServiceProvider::class,
            Viserio\View\Providers\ViewServiceProvider::class,
        ],

        'aliases' => [
            'Bus'           => Viserio\Bus\Proxies\Bus::class,
            'Cache'         => Viserio\Cache\Proxies\Cache::class,
            'Config'        => Viserio\Config\Proxies\Config::class,
            'Connect'       => Viserio\Connect\Proxies\Connect::class,
            'Console'       => Viserio\Console\Proxies\Console::class,
            'Cookie'        => Viserio\Cookie\Proxies\Cookie::class,
            'RequestCookie' => Viserio\Cookie\Proxies\RequestCookie::class,
            'Crypt'         => Viserio\Encryption\Proxies\Crypt::class,
            'Events'        => Viserio\Events\Proxies\Events::class,
            'Files'         => Viserio\Filesystem\Proxies\Files::class,
            'Storage'       => Viserio\Filesystem\Proxies\Storage::class,
            'App'           => Viserio\Foundation\Proxies\App::class,
            'Password'      => Viserio\Hashing\Proxies\Password::class,
            'Log'           => Viserio\Log\Proxies\Log::class,
            'Mail'          => Viserio\Mail\Proxies\Mail::class,
            'Parser'        => Viserio\Parsers\Proxies\Parser::class,
            'Pipeline'      => Viserio\Pipeline\Proxies\Pipeline::class,
            'Queue'         => Viserio\Queue\Proxies\Queue::class,
            'Route'         => Viserio\Routing\Proxies\Route::class,
            'Session'       => Viserio\Session\Proxies\Session::class,
            'Lang'          => Viserio\Translation\Proxies\Lang::class,
            'Validator'     => Viserio\Validation\Proxies\Validator::class,
            'View'          => Viserio\View\Proxies\View::class,
        ],
    ],
];
