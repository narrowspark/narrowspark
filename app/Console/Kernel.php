<?php
declare(strict_types=1);
namespace App\Console;

use Viserio\Component\Cron\Schedule;
use Viserio\Component\Foundation\Bootstrap\DetectEnvironment;
use Viserio\Component\Foundation\Bootstrap\HandleExceptions;
use Viserio\Component\Foundation\Bootstrap\LoadCommands;
use Viserio\Component\Foundation\Bootstrap\LoadConfiguration;
use Viserio\Component\Foundation\Bootstrap\LoadServiceProvider;
use Viserio\Component\Foundation\Bootstrap\RegisterStaticalProxys;
use Viserio\Component\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
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
        LoadCommands::class,
    ];

    /**
     * {@inheritdoc}
     */
    protected function schedule(Schedule $schedule)
    {
    }
}
