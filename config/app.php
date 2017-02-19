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
            Viserio\Component\Bus\Providers\QueueingBusServiceProvider::class,
            Viserio\Component\Cache\Providers\CacheServiceProvider::class,
            Viserio\Component\Console\Providers\ConsoleServiceProvider::class,
            Viserio\Component\Cookie\Providers\CookieServiceProvider::class,
            Viserio\Component\Cron\Providers\CronServiceProvider::class,
            Viserio\Component\Encryption\Providers\EncrypterServiceProvider::class,
            Viserio\Component\Filesystem\Providers\FilesServiceProvider::class,
            Viserio\Component\Foundation\Providers\FoundationCommandsServiceProvider::class,
            Viserio\Component\Hashing\Providers\HashingServiceProvider::class,
            Viserio\Component\HttpFactory\Providers\HttpFactoryServiceProvider::class,
            Viserio\Component\Mail\Providers\MailServiceProvider::class,
            Viserio\Component\OptionsResolver\Providers\OptionsResolverServiceProvider::class,
            Viserio\Component\Pipeline\Providers\PipelineServiceProvider::class,
            Viserio\Component\Routing\Providers\RoutingServiceProvider::class,
            Viserio\Component\Session\Providers\SessionServiceProvider::class,
            Viserio\Component\StaticalProxy\Providers\AliasLoaderServiceProvider::class,
            Viserio\Component\StaticalProxy\Providers\StaticalProxyServiceProvider::class,
            Viserio\Component\Translation\Providers\TranslationServiceProvider::class,
            Viserio\Component\Validation\Providers\ValidationServiceProvider::class,
            Viserio\Component\View\Providers\ViewServiceProvider::class,
            Viserio\Component\WebProfiler\Providers\WebProfilerServiceProvider::class,

            // Bridge Service Providers...
            Viserio\Bridge\Doctrine\Providers\DatabaseServiceProvider::class,
            Viserio\Bridge\Doctrine\Providers\MigrationsServiceProvider::class,
            Viserio\Bridge\Twig\Providers\TwigBridgeCommandsServiceProvider::class,
            Viserio\Bridge\Twig\Providers\TwigBridgeServiceProvider::class,

            // Narrowspark WebProfiler Collector Service Providers...
            Viserio\Bridge\Twig\Providers\TwigBridgeDataCollectorsServiceProvider::class,
            Viserio\Component\Foundation\Providers\FoundationDataCollectorsServiceProvider::class,
            Viserio\Component\Translation\Providers\TranslationDataCollectorServiceProvider::class,
            Viserio\Component\Log\Providers\LogsDataCollectorServiceProvider::class,
            // Viserio\Component\WebProfiler\Providers\WebProfilerPDOBridgeServiceProvider::class,
            Viserio\Component\WebProfiler\Providers\WebProfilerPsr6CacheBridgeServiceProvider::class,
            // Viserio\Component\Events\Providers\EventDataCollectorServiceProvider::class,
            // Viserio\Component\WebProfiler\Providers\WebProfilerSwiftMailerBridgeServiceProvider::class,

            // Package Service Providers...

            // Application Service Providers...
        ],

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
            'Lang'          => Viserio\Component\Translation\Proxies\Lang::class,
            'Validator'     => Viserio\Component\Validation\Proxies\Validator::class,
            'View'          => Viserio\Component\View\Proxies\View::class,
        ],
    ],
];
