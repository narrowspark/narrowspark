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
    Viserio\Component\Bus\Providers\QueueingBusServiceProvider::class,
    Viserio\Component\Cache\Providers\CacheServiceProvider::class,
    Viserio\Component\Cookie\Providers\CookieServiceProvider::class,
    Viserio\Component\Cron\Providers\CronServiceProvider::class,
    Viserio\Component\Encryption\Providers\EncrypterServiceProvider::class,
    Viserio\Component\Filesystem\Providers\FilesServiceProvider::class,
    Viserio\Component\Foundation\Providers\ConsoleCommandsServiceProvider::class,
    Viserio\Component\Foundation\Providers\ConfigureLoggingServiceProvider::class,
    Viserio\Component\Hashing\Providers\HashingServiceProvider::class,
    Viserio\Component\HttpFactory\Providers\HttpFactoryServiceProvider::class,
    Viserio\Component\Log\Providers\LoggerServiceProvider::class,
    Viserio\Component\Mail\Providers\MailServiceProvider::class,
    Viserio\Component\OptionsResolver\Providers\OptionsResolverServiceProvider::class,
    Viserio\Component\Parsers\Providers\ParsersServiceProvider::class,
    Viserio\Component\Pipeline\Providers\PipelineServiceProvider::class,
    Viserio\Component\Routing\Providers\RoutingServiceProvider::class,
    Viserio\Component\Routing\Providers\ConsoleCommandsServiceProvider::class,
    Viserio\Component\Session\Providers\SessionServiceProvider::class,
    Viserio\Component\StaticalProxy\Providers\AliasLoaderServiceProvider::class,
    Viserio\Component\StaticalProxy\Providers\StaticalProxyServiceProvider::class,
    Viserio\Component\Translation\Providers\TranslationServiceProvider::class,
    Viserio\Component\Validation\Providers\ValidationServiceProvider::class,
    Viserio\Component\View\Providers\ViewServiceProvider::class,

    // Bridge Service Providers...
    Viserio\Bridge\Doctrine\Providers\DatabaseServiceProvider::class,
    Viserio\Bridge\Doctrine\Providers\MigrationsServiceProvider::class,
    Viserio\Bridge\Twig\Providers\ConsoleCommandsServiceProvider::class,
    Viserio\Bridge\Twig\Providers\TwigBridgeServiceProvider::class,

    // Package Service Providers...
    Narrowspark\HttpEmitter\Providers\SapiEmitterServiceProvider::class,

    // Application Service Providers...´
     App\Providers\RouteServiceProvider::class,
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
    $providers[] = Viserio\Component\Profiler\Providers\ProfilerServiceProvider::class;
    $providers[] = Viserio\Bridge\Twig\Providers\TwigBridgeDataCollectorsServiceProvider::class;
    // $providers[] = Viserio\Component\Events\Providers\EventDataCollectorServiceProvider::class;
    $providers[] = Viserio\Component\Foundation\Providers\FoundationDataCollectorServiceProvider::class;
    $providers[] = Viserio\Component\Profiler\Providers\ProfilerMonologDataCollectorServiceProvider::class;
    $providers[] = Viserio\Component\Routing\Providers\RoutingDataCollectorServiceProvider::class;
    $providers[] = Viserio\Component\Translation\Providers\TranslationDataCollectorServiceProvider::class;
    // $providers[] = Viserio\Component\Profiler\Providers\ProfilerPDOBridgeServiceProvider::class;
    $providers[] = Viserio\Component\Profiler\Providers\ProfilerPsr6Psr16CacheBridgeServiceProvider::class;
    // $providers[] = Viserio\Component\Profiler\Providers\ProfilerSwiftMailerBridgeServiceProvider::class;
}

return $providers;
