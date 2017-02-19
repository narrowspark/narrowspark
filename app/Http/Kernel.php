<?php
declare(strict_types=1);
namespace App\Http;

use App\Http\Bootstrap\LoadRoutes;
use App\Http\Middleware\EncryptedCookiesMiddleware;
use App\Http\Middleware\VerifyCsrfTokenMiddleware;
use Viserio\Component\Cookie\Middleware\AddQueuedCookiesToResponseMiddleware;
use Viserio\Component\Foundation\Bootstrap\DetectEnvironment;
use Viserio\Component\Foundation\Bootstrap\HandleExceptions;
use Viserio\Component\Foundation\Bootstrap\LoadConfiguration;
use Viserio\Component\Foundation\Bootstrap\LoadServiceProvider;
use Viserio\Component\Foundation\Bootstrap\RegisterStaticalProxys;
use Viserio\Component\Foundation\Http\Kernel as HttpKernel;
use Viserio\Component\Session\Middleware\StartSessionMiddleware;

class Kernel extends HttpKernel
{
    /**
     * The bootstrap classes for the application.
     *
     * @var array
     */
    protected $bootstrappers = [
        LoadConfiguration::class,
        DetectEnvironment::class,
        HandleExceptions::class,
        RegisterStaticalProxys::class,
        LoadServiceProvider::class,
        LoadRoutes::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // EncryptedCookiesMiddleware::class,
            // AddQueuedCookiesToResponseMiddleware::class,
            // StartSessionMiddleware::class,
            // VerifyCsrfTokenMiddleware::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $middlewares = [
    ];
}
