<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Autoloaded Service Providers
|--------------------------------------------------------------------------
|
| The service providers listed here will be automatically loaded on the
| request to your application. Feel free to add your own services to
| this array to grant expanded functionality to your applications.
|
*/
$providers = [
    // Narrowspark Framework Service Providers...
    Viserio\Component\Bus\Provider\QueueingBusServiceProvider::class,
    Viserio\Component\Cache\Provider\CacheServiceProvider::class,
    Viserio\Component\Console\Provider\LazilyCommandsServiceProvider::class,
    Viserio\Component\Cookie\Provider\CookieServiceProvider::class,
    Viserio\Component\Cron\Provider\CronServiceProvider::class,
    Viserio\Component\Encryption\Provider\EncrypterServiceProvider::class,
    Viserio\Component\Filesystem\Provider\FilesServiceProvider::class,
    Viserio\Component\Foundation\Provider\ConsoleCommandsServiceProvider::class,
    Viserio\Component\Foundation\Provider\ConfigureLoggingServiceProvider::class,
    Viserio\Component\HttpFactory\Provider\HttpFactoryServiceProvider::class,
    Viserio\Component\Log\Provider\LoggerServiceProvider::class,
    Viserio\Component\Mail\Provider\MailServiceProvider::class,
    Viserio\Component\Parser\Provider\ParserServiceProvider::class,
    Viserio\Component\Routing\Provider\RoutingServiceProvider::class,
    Viserio\Component\Routing\Provider\ConsoleCommandsServiceProvider::class,
    Viserio\Component\Session\Provider\SessionServiceProvider::class,
    Viserio\Component\StaticalProxy\Provider\AliasLoaderServiceProvider::class,
    Viserio\Component\Translation\Provider\TranslationServiceProvider::class,
    Viserio\Component\Validation\Provider\ValidationServiceProvider::class,
    Viserio\Component\View\Provider\ViewServiceProvider::class,

    // Provider Service Providers...
    Viserio\Provider\Twig\Provider\ConsoleCommandsServiceProvider::class,
    Viserio\Provider\Twig\Provider\TwigServiceProvider::class,

    // Bridge Service Providers...
    Viserio\Bridge\Twig\Provider\TwigBridgeServiceProvider::class,

    // Package Service Providers...
    Narrowspark\HttpEmitter\Providers\SapiEmitterServiceProvider::class,

    // Application Service Providers...´
    App\Provider\RouteServiceProvider::class,
];

/*
 |--------------------------------------------------------------------------
 | Testing And Local Autoloaded Service Providers
 |--------------------------------------------------------------------------
 |
 | Some providers are only used while developing the application or during
 | the unit and functional tests. Therefore, they are only registered
 | when the application runs in 'local' or 'testing' environments. This allows
 | to increase application performance in the production environment.
 |
 */
if ($kernel->isLocal() || $kernel->isRunningUnitTests()) {
    // Narrowspark Profiler Service Providers...
    $providers[] = Viserio\Component\Profiler\Provider\ProfilerServiceProvider::class;
    $providers[] = Viserio\Bridge\Twig\Provider\TwigBridgeDataCollectorsServiceProvider::class;
    $providers[] = Viserio\Component\Events\Provider\EventsDataCollectorServiceProvider::class;
    $providers[] = Viserio\Component\Foundation\Provider\FoundationDataCollectorServiceProvider::class;
    $providers[] = Viserio\Component\Profiler\Provider\ProfilerMonologDataCollectorServiceProvider::class;
    $providers[] = Viserio\Component\Routing\Provider\RoutingDataCollectorServiceProvider::class;
    $providers[] = Viserio\Component\Translation\Provider\TranslationDataCollectorServiceProvider::class;
    // $providers[] = Viserio\Component\Profiler\Provider\ProfilerPDOBridgeServiceProvider::class;
    $providers[] = Viserio\Component\Profiler\Provider\ProfilerPsr6Psr16CacheBridgeServiceProvider::class;
//    $providers[] = Viserio\Component\Profiler\Provider\ProfilerSwiftMailerBridgeServiceProvider::class;
    $providers[] = Viserio\Component\OptionsResolver\Provider\ConsoleCommandsServiceProvider::class;
}

return $providers;
