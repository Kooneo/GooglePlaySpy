<?php

namespace App\Console\Commands\Log;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ClearLogFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature =  'log:clear';

    /**
     * The console command description.
     *
     * @var string
     */
     protected $description = 'Clear Laravel log';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        exec('echo "" > ' . storage_path('logs/laravel.log'));
        $this->info('Logs have been cleared');
        Artisan::call('cache:clear');
        $this->comment('Cache have been cleared');
        Artisan::call('view:clear');
        $this->info('View Cache have been cleared');
    }
}
