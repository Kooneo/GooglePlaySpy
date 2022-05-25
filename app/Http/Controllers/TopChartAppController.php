<?php

namespace App\Http\Controllers;

use App\Repositories\GPlayRepository;
use App\Singletons\GplaySingleton;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Redis as MRedis;
use Livewire\Livewire;
use Nelexa\GPlay\Enum\AgeEnum;
use Nelexa\GPlay\Enum\CategoryEnum;
use Nelexa\GPlay\GPlayApps;
use Nelexa\GPlay\Model\ClusterPage;

class TopChartAppController extends Controller
{

    public function index(GPlayRepository $gplayRepository)
    {
        set_time_limit(0);
        $appslist = $gplayRepository->getTopAppsInCategory(category: CategoryEnum::GAME(), ageLimit: AgeEnum::FIVE_UNDER(), numOfApps: 10);
        dd($appslist);
        // get categories
        $categories = $gplayRepository->getCategories();
        return view('frontend.top-app', compact('categories', 'appslist'));
    }

    public function loadMoreApps(Request $request) {
        $gplay = GplaySingleton::getInstance()->gplay;
        set_time_limit(0);

//        $cache = new \Symfony\Component\Cache\Psr16Cache(
//            new \Symfony\Component\Cache\Adapter\FilesystemAdapter()
//        );
//        $gplay->setCache($cache, \DateInterval::createFromDateString('1 hour'));
//
//        $gplay->setCacheTtl(\DateInterval::createFromDateString('1 hour'));
//        $gplay->setConcurrency(8);
//
        $apps = $gplay->getTopApps(
            $category = \Nelexa\GPlay\Enum\CategoryEnum::GAME_CASUAL(),
            $ageLimit = \Nelexa\GPlay\Enum\AgeEnum::FIVE_UNDER(),
            150
        );



        $appIds = [];

        $appslist = [];

        foreach ($apps as $app) {
            array_push($appIds, $app->getId());
        }

        $newApps = $gplay->getAppsInfo($appIds);

        if (is_array($newApps)) {
            foreach ($newApps as $app) {
                if ($app != null) {
                    array_push($appslist, $app);
                }
            }


            $appsst = array_chunk($newApps, 50);
            if ($request->ofset < count($appsst)) {
                return response()->json([
                    "apps" => $appsst[$request->ofset],
                ]);
            }
        }





        //        return response()->json([
////            'html' => view('frontend.top-app-item', compact('appslist'))->render(),
//            'next_page' => "djdj"
//        ]);
    }


}
