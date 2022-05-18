<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class loadTopApps extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gplay:loadtopapps';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'load top apps';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dispatch(new \App\Jobs\loadTopApps())->onQueue('gplay');
    }
}
