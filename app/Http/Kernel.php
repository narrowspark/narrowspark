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
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            AddQueuedCookiesToResponseMiddleware::class,
            EncryptedCookiesMiddleware::class,
            StartSessionMiddleware::class,
            VerifyCsrfTokenMiddleware::class,
            99999 => ProfilerMiddleware::class,
        ],
    ];

    /**
     * The bootstrap classes for the application.
     *
     * @var array
     */
    protected $bootstrappers = [
        LoadEnvironmentVariables::class,
        LoadConfiguration::class,
        ConfigureKernel::class,
        HandleLogger::class,
        LoadServiceProvider::class,
        HandleExceptions::class,
        RegisterStaticalProxys::class,
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
