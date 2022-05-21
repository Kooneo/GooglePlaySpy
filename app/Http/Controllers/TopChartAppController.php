<?php

namespace App\Http\Controllers;

use App\Singleton\GplaySingleton;
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


        $redis = Redis::connection();

//        $cache = new \Symfony\Component\Cache\Psr16Cache(
//            new \Symfony\Component\Cache\Adapter\FilesystemAdapter()
//        );
//        $gplay->setCache($cache, \DateInterval::createFromDateString('1 hour'));
//
//        $gplay->setCacheTtl(\DateInterval::createFromDateString('1 hour'));
//        $gplay->setConcurrency(8);
//

        // --------------------------------------------------

//        $category = CategoryEnum::GAME();

        $appIds = [];

        $appslist = [];

        if (!$redis->exists("top_apps:GAME") || $redis->get("top_apps:GAME") == null) {
            $topApps = $gplay->getTopApps(
                $category = \Nelexa\GPlay\Enum\CategoryEnum::GAME(),
                $ageLimit = \Nelexa\GPlay\Enum\AgeEnum::FIVE_UNDER(),
                GPlayApps::UNLIMIT
            );

            $redis->set("top_apps:GAME", json_encode($topApps));
            foreach ($topApps as $app) {
                array_push($appIds, $app->getId());
            }

        } else {
            $topApps = json_decode($redis->get("top_apps:GAME"), true);

            foreach ($topApps as $app) {
                array_push($appIds, $app['id']);
            }
        }
//
        foreach ($appIds as $appId) {
            if (!$redis->exists("top_apps_fulld:GAME:{$appId}")) {
                $appinfo = $gplay->getAppInfo($appId);
                if ($appinfo != null) {
                    $redis->set("top_apps_fulld:GAME:{$appId}", json_encode($appinfo));
                    array_push($appslist, $appinfo);
                }

            } else {
                $appinfo = json_decode( $redis->get("top_apps_fulld:GAME:{$appId}"), true);
                if ($appinfo != null) {
                    array_push($appslist, $appinfo);
                }
//                array_push($appslist, $appinfo);
            }
        }
//        } else {
//            $appslist = json_decode($redis->get("top_apps_fulld:GAME"), true);
//        }
//
        set_time_limit(0);

//        dd($appslist);


        if (!$redis->exists('categories') && $redis->get('categories') == null) {
            $categories = $gplay->getCategories();
            $redis->set('categories', json_encode($categories));
        } else {
            $categories = json_decode($redis->get('categories'), true);
        }
//        dd($appslist[106]);
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
