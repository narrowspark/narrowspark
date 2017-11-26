<?php
declare(strict_types=1);
namespace App\Provider;

use Psr\Container\ContainerInterface;
use Interop\Container\ServiceProviderInterface;
use Symfony\Component\Finder\Finder;
use Viserio\Component\Contract\Foundation\Kernel as KernelContract;
use Viserio\Component\Contract\Routing\Router as RouterContract;

class RouteServiceProvider implements ServiceProviderInterface
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
    public function getFactories()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensions(): array
    {
        return [
            RouterContract::class => [self::class, 'extendRouter'],
        ];
    }

    /**
     * Extend viserio router to load routes automatically.
     *
     * @param \Psr\Container\ContainerInterface               $container
     * @param null|\Viserio\Component\Contract\Routing\Router $router
     *
     * @return null|\Viserio\Component\Contract\Routing\Router
     */
    public static function extendRouter(ContainerInterface $container, ?RouterContract $router = null): ?RouterContract
    {
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

     * @param \Viserio\Component\Contract\Routing\Router $router
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

     * @param \Viserio\Component\Contract\Routing\Router $router
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
        $files      = [];
        $foundFiles = Finder::create()->files()->name('*.php')->in($path);

        foreach ($foundFiles as $file) {
            $files[basename($file->getRealPath(), '.php')] = $file->getRealPath();
        }

        return $files;
    }
}
