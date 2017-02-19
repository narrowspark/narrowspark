<?php
declare(strict_types=1);
namespace App\Http\Bootstrap;

use Viserio\Component\Contracts\Config\Repository as RepositoryContract;
use Viserio\Component\Contracts\Foundation\Application;
use Viserio\Component\Contracts\Foundation\Bootstrap as BootstrapContract;
use Viserio\Component\Foundation\Bootstrap\AbstractLoadFiles;
use Viserio\Component\Contracts\Routing\Router as RouterContract;

class LoadRoutes extends AbstractLoadFiles implements BootstrapContract
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * {@inheritdoc}
     */
    public function bootstrap(Application $app)
    {
        $routesPath = realpath($app->get(RepositoryContract::class)->get('path.routes'));
        $router     = $app->get(RouterContract::class);

        $this->mapApiRoutes($router, $routesPath);

        $this->mapWebRoutes($router, $routesPath);

        foreach ($this->getFiles($routesPath) as $key => $path) {
            if ($key === 'api' || $key === 'web') {
                continue;
            }

            require_once $path;
        }
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.

     * @param \Viserio\Component\Contracts\Routing\Router $router
     * @param string                                      $routesPath
     */
    protected function mapWebRoutes(RouterContract $router, string $routesPath)
    {
        $router->group(
            [
                'middlewares' => 'web',
                'namespace'   => $this->namespace,
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
     */
    protected function mapApiRoutes(RouterContract $router, string $routesPath)
    {
        $router->group(
            [
            'middlewares' => 'api',
            'namespace'   => $this->namespace,
            'prefix'      => 'api',
            ],
            $routesPath . '/api.php'
        );
    }
}
