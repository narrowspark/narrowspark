<?php
declare(strict_types=1);
namespace App\Providers;

use Interop\Container\ContainerInterface;
use Interop\Container\ServiceProvider;
use Symfony\Component\Finder\Finder;
use Viserio\Component\Contracts\Foundation\Kernel as KernelContract;
use Viserio\Component\Contracts\Routing\Router as RouterContract;

class RouteServiceProvider implements ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected static $namespace = 'App\Http\Controllers';

    /**
     * {@inheritdoc}
     */
    public function getServices()
    {
        return [
            RouterContract::class => [self::class, 'createConsoleCommands'],
        ];
    }

    /**
     * Extend viserio router to load routes automatically.
     *
     * @param \Interop\Container\ContainerInterface $container
     * @param null|callable                         $getPrevious
     *
     * @return null|\Viserio\Component\Contracts\Routing\Router
     */
    public static function createConsoleCommands(ContainerInterface $container, ?callable $getPrevious = null): ?RouterContract
    {
        $router = is_callable($getPrevious) ? $getPrevious() : $getPrevious;

        if ($router !== null) {
            $routesPath = $container->get(KernelContract::class)->getRoutesPath();

            self::mapApiRoutes($router, $routesPath);

            self::mapWebRoutes($router, $routesPath);

            foreach (self::getFiles($routesPath) as $key => $path) {
                if ($key === 'api' || $key === 'web') {
                    continue;
                }

                require_once $path;
            }

            return $router;
        }

        return $router;
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     
     * @param \Viserio\Component\Contracts\Routing\Router $router
     * @param string                                      $routesPath
     *
     * @return void
     */
    protected static function mapWebRoutes(RouterContract $router, string $routesPath): void
    {
        $router->group(
            [
                'middlewares' => 'web',
                'namespace'   => self::$namespace,
            ],
            $routesPath . '/web.php'
        );
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     
     * @param \Viserio\Component\Contracts\Routing\Router $router
     * @param string                                      $routesPath
     *
     * @return void
     */
    protected static function mapApiRoutes(RouterContract $router, string $routesPath): void
    {
        $router->group(
            [
            'middlewares' => 'api',
            'namespace'   => self::$namespace,
            'prefix'      => 'api',
            ],
            $routesPath . '/api.php'
        );
    }

    /**
     * Get all of the files for the application.
     *
     * @param string $path
     *
     * @return array
     */
    protected static function getFiles(string $path): array
    {
        $files = [];

        foreach (Finder::create()->files()->name('*.php')->in($path) as $file) {
            $files[basename($file->getRealPath(), '.php')] = $file->getRealPath();
        }

        return $files;
    }
}
