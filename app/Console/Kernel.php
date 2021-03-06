<?php

namespace App\Console;

use App\Console\Commands\Database\DropDatabase;
use App\Console\Commands\Database\ResetDatabase;
use App\Console\Commands\Database\UsersAndRelatedTablesClean;
use App\Console\Commands\Images\ReGenerateImages;
use App\Console\Commands\Install\GenerateRobotsTxt;
use App\Console\Commands\Install\ProjectOptimize;
use App\Console\Commands\Install\StoragePrepare;
use App\Console\Commands\Install\SymLinksPrepare;
use App\Console\Commands\Install\YarnInstall;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        StoragePrepare::class,
        YarnInstall::class,
        SymLinksPrepare::class,
        ProjectOptimize::class,
        UsersAndRelatedTablesClean::class,
        DropDatabase::class,
        ResetDatabase::class,
        ReGenerateImages::class,
        GenerateRobotsTxt::class,
    ];
    
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // we schedule the users related tables from expired lines
        $schedule->command('database:users:clean')->dailyAt('23:00');
    }
}
