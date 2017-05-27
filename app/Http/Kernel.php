<?php
declare(strict_types=1);
namespace App\Http;

use Viserio\Component\Cookie\Middleware\AddQueuedCookiesToResponseMiddleware;
use Viserio\Component\Cookie\Middleware\EncryptedCookiesMiddleware;
use Viserio\Component\Foundation\Bootstrap\ConfigureKernel;
use Viserio\Component\Foundation\Bootstrap\HandleExceptions;
use Viserio\Component\Foundation\Bootstrap\HandleLogger;
use Viserio\Component\Foundation\Bootstrap\LoadConfiguration;
use Viserio\Component\Foundation\Bootstrap\LoadEnvironmentVariables;
use Viserio\Component\Foundation\Bootstrap\LoadServiceProvider;
use Viserio\Component\Foundation\Bootstrap\RegisterStaticalProxys;
use Viserio\Component\Foundation\Http\Kernel as HttpKernel;
use Viserio\Component\Foundation\Http\Middlewares\CheckForMaintenanceModeMiddleware;
use Viserio\Component\Profiler\Middleware\ProfilerMiddleware;
use Viserio\Component\Session\Middleware\StartSessionMiddleware;
use Viserio\Component\Session\Middleware\VerifyCsrfTokenMiddleware;

class Kernel extends HttpKernel
{
    /**
     * The bootstrap classes for the application.
     *
     * @var array
     */
    protected $bootstrappers = [
        LoadEnvironmentVariables::class,
        LoadConfiguration::class,
        ConfigureKernel::class,
        LoadServiceProvider::class,
        HandleLogger::class,
        HandleExceptions::class,
        RegisterStaticalProxys::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            ProfilerMiddleware::class,
            EncryptedCookiesMiddleware::class,
            AddQueuedCookiesToResponseMiddleware::class,
            StartSessionMiddleware::class,
            VerifyCsrfTokenMiddleware::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $middlewares = [
        CheckForMaintenanceModeMiddleware::class,
    ];
}
