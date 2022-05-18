<?php

namespace App\Jobs;

use App\Http\Controllers\TopChartAppController;
use App\Singleton\GplaySingleton;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Nelexa\GPlay\GPlayApps;

class loadTopApps implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private $appslist = [];
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $gplay = GplaySingleton::getInstance()->gplay;
        $apps = $gplay->getTopApps(
            $category = \Nelexa\GPlay\Enum\CategoryEnum::DATING(),
            $ageLimit = \Nelexa\GPlay\Enum\AgeEnum::SIX_EIGHT(),
            $limit = 10
        );


        $appIds = [];

        foreach ($apps as $app) {
            array_push($appIds, $app->getId());
        }

        foreach ($appIds as $appId) {
            $app = $gplay->getAppInfo($appId);
            array_push($this->appslist, $app);
        }

//        GplaySingleton::getInstance()->setTopAppsList($this->appslist);

        new TopChartAppController($this->appslist);
    }

    public function getAppsList()
    {
        return $this->appslist;
    }
}
