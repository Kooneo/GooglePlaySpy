<?php

namespace App\Http\Controllers;

use App\Singleton\GplaySingleton;
use Illuminate\Http\Request;
use Livewire\Livewire;
use Nelexa\GPlay\Enum\AgeEnum;
use Nelexa\GPlay\Enum\CategoryEnum;
use Nelexa\GPlay\GPlayApps;
use Nelexa\GPlay\Model\ClusterPage;

class TopChartAppController extends Controller
{

    public $appslist;


    public function index()
    {
//        $gplay = new \Nelexa\GPlay\GPlayApps($defaultLocale = 'en_US', $defaultCountry = 'us');
////        $appslist = $gplay->getListApps(CategoryEnum::GAME(), AgeEnum::FIVE_UNDER(), "10" );
//
//        $clusterPage = 'https://play.google.com/store/apps/collection/cluster?clp=0g4jCiEKG3RvcHNlbGxpbmdfZnJlZV9BUFBMSUNBVElPThAHGAM%3D:S:ANO1ljKs-KA&gsr=CibSDiMKIQobdG9wc2VsbGluZ19mcmVlX0FQUExJQ0FUSU9OEAcYAw%3D%3D:S:ANO1ljL40zU&hl=en';
////        $appslist = $gplay->getListApps();
//
////        dd($appslist);

        $gplay = GplaySingleton::getInstance()->gplay;


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
            50
        );



        $appIds = [];

        $appslist = [];

        foreach ($apps as $app) {
            array_push($appIds, $app->getId());
        }

        $newApps = $gplay->getAppsInfo($appIds);


        if (is_array($newApps)) {
            foreach ($newApps as $app) {
                array_push($appslist, $app);
            }
        }

        $this->appslist = $appslist;
//
//        foreach ($appIds as $appId) {
//            $app = $gplay->getAppInfo($appId);
//            array_push($appslist, $app);
//        }

//        dd($apps);
//
//        $appslist1 = [];
//
//
//
//        foreach ($apps as $app) {
//            array_push($appslist1, $app->getId());
//        }
//
//        $chunks = array_chunk($appslist1, 100);
////        dd($chunks);
//        $appslist = $this->appslist;
//
        set_time_limit(0);
        $categories = $gplay->getCategories();
//        dd($appslist);
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
