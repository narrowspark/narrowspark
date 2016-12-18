<?php
declare(strict_types=1);
namespace App\Http\Bootstrap;

use Viserio\Contracts\Config\Repository as RepositoryContract;
use Viserio\Contracts\Foundation\Application;
use Viserio\Contracts\Foundation\Bootstrap as BootstrapContract;
use Viserio\Foundation\Bootstrap\AbstractLoadFiles;
use Viserio\Routing\Proxies\Route;

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

        $this->mapApiRoutes($routesPath);

        $this->mapWebRoutes($routesPath);

        // foreach ($this->getFiles($routesPath) as $key => $path) {
        //     require_once $path;
        // }
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     * @param string $routesPath
     */
    protected function mapWebRoutes(string $routesPath)
    {
        Route::group(
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
     * @param string $routesPath
     */
    protected function mapApiRoutes(string $routesPath)
    {
        Route::group(
            [
            'middlewares' => 'api',
            'namespace'   => $this->namespace,
            'prefix'      => 'api',
            ],
            $routesPath . '/api.php'
        );
    }
}
