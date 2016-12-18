<?php
declare(strict_types=1);

return [
    'app' => [
        'env' => env('APP_ENV', 'develop'),

        'timezone' => 'UTC',

        'log'           => 'daily',
        'log_level'     => 'debug',
        'log_max_files' => 5,

        'serviceproviders' => [
            // Narrowspark Framework Service Providers...
            Viserio\Bus\Providers\QueueingBusServiceProvider::class,
            Viserio\Cache\Providers\CacheServiceProvider::class,
            Viserio\Console\Providers\ConsoleServiceProvider::class,
            Viserio\Cookie\Providers\CookieServiceProvider::class,
            Viserio\Cron\Providers\CronServiceProvider::class,
            Viserio\Database\Providers\DatabaseServiceProvider::class,
            Viserio\Database\Providers\MigrationsServiceProvider::class,
            Viserio\Encryption\Providers\EncrypterServiceProvider::class,
            Viserio\Filesystem\Providers\FilesServiceProvider::class,
            Viserio\Foundation\Providers\FoundationCommandsServiceProvider::class,
            Viserio\Hashing\Providers\HashingServiceProvider::class,
            Viserio\HttpFactory\Providers\HttpFactoryServiceProvider::class,
            Viserio\Mail\Providers\MailServiceProvider::class,
            Viserio\Pipeline\Providers\PipelineServiceProvider::class,
            Viserio\Routing\Providers\RoutingServiceProvider::class,
            Viserio\Session\Providers\SessionServiceProvider::class,
            Viserio\StaticalProxy\Providers\AliasLoaderServiceProvider::class,
            Viserio\StaticalProxy\Providers\StaticalProxyServiceProvider::class,
            Viserio\Translation\Providers\TranslationServiceProvider::class,
            Viserio\Validation\Providers\ValidationServiceProvider::class,
            Viserio\View\Providers\ViewServiceProvider::class,
            Viserio\WebProfiler\Providers\WebProfilerServiceProvider::class,

            // Narrowspark WebProfiler Collector Service Providers...
            Viserio\Foundation\Providers\FoundationDataCollectorsServiceProvider::class,
            Viserio\Translation\Providers\TranslationCollectorServiceProvider::class,
            Viserio\Cache\Providers\CacheCollectorServiceProvider::class,
            Viserio\Log\Providers\LogCollectorServiceProvider::class,

            // Package Service Providers...

            // Application Service Providers...
        ],

        'aliases' => [
            'Bus'           => Viserio\Bus\Proxies\Bus::class,
            'Cache'         => Viserio\Cache\Proxies\Cache::class,
            'Config'        => Viserio\Config\Proxies\Config::class,
            'Console'       => Viserio\Console\Proxies\Console::class,
            'Cookie'        => Viserio\Cookie\Proxies\Cookie::class,
            'Schedule'      => Viserio\Cron\Proxies\Schedule::class,
            'DB'            => Viserio\Database\Proxies\DB::class,
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
