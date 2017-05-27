<?php
declare(strict_types=1);
namespace App\Console;

use Viserio\Component\Cron\Schedule;
use Viserio\Component\Foundation\Bootstrap\ConfigureKernel;
use Viserio\Component\Foundation\Bootstrap\HandleExceptions;
use Viserio\Component\Foundation\Bootstrap\HandleLogger;
use Viserio\Component\Foundation\Bootstrap\LoadConfiguration;
use Viserio\Component\Foundation\Bootstrap\LoadEnvironmentVariables;
use Viserio\Component\Foundation\Bootstrap\LoadServiceProvider;
use Viserio\Component\Foundation\Bootstrap\RegisterStaticalProxys;
use Viserio\Component\Foundation\Bootstrap\SetRequestForConsole;
use Viserio\Component\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
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
        SetRequestForConsole::class,
    ];

    /**
     * {@inheritdoc}
     */
    protected function getSchedule(Schedule $schedule): void
    {
    }
}
