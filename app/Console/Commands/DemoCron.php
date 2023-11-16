<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        \Log::info("Cron job is working fine");

// Have to add this command in Cpanel cronjon 
// * * * * * php /path/to/artisan schedule:run 1>> /dev/null 2>&1
// OR
// * * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
    }
}
