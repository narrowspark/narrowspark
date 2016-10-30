<?php
declare(strict_types=1);

namespace App\Console;

use Viserio\Cron\Schedule;
use Viserio\Foundation\Bootstrap\DetectEnvironment;
use Viserio\Foundation\Bootstrap\HandleExceptions;
use Viserio\Foundation\Bootstrap\LoadConfiguration;
use Viserio\Foundation\Bootstrap\LoadServiceProvider;
use Viserio\Foundation\Bootstrap\LoadCommands;
use Viserio\Foundation\Bootstrap\RegisterStaticalProxys;
use Viserio\Foundation\Console\Kernel as ConsoleKernel;

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
        LoadCommands::class
    ];

    /**
     * {@inheritdoc}
     */
    protected function schedule(Schedule $schedule)
    {
        //
    }
}
