<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\Livewire;
use Nelexa\GPlay\Enum\AgeEnum;
use Nelexa\GPlay\Enum\CategoryEnum;
use Nelexa\GPlay\GPlayApps;
use Nelexa\GPlay\Model\ClusterPage;

class TopChartAppController extends Controller
{
    public function index()
    {
        $gplay = new \Nelexa\GPlay\GPlayApps($defaultLocale = 'en_US', $defaultCountry = 'us');
//        $appslist = $gplay->getListApps(CategoryEnum::GAME(), AgeEnum::FIVE_UNDER(), "10" );

        $clusterPage = 'https://play.google.com/store/apps/collection/cluster?clp=0g4jCiEKG3RvcHNlbGxpbmdfZnJlZV9BUFBMSUNBVElPThAHGAM%3D:S:ANO1ljKs-KA&gsr=CibSDiMKIQobdG9wc2VsbGluZ19mcmVlX0FQUExJQ0FUSU9OEAcYAw%3D%3D:S:ANO1ljL40zU&hl=en';
//        $appslist = $gplay->getListApps();

//        dd($appslist);

        $cache = new \Symfony\Component\Cache\Psr16Cache(
            new \Symfony\Component\Cache\Adapter\FilesystemAdapter()
        );
        $gplay->setCache($cache, \DateInterval::createFromDateString('1 hour'));

        $gplay->setCacheTtl(\DateInterval::createFromDateString('1 hour'));
        $gplay->setConcurrency(8);

        $apps = $gplay->getTopApps(
            $category = \Nelexa\GPlay\Enum\CategoryEnum::GAME(),
            $ageLimit = \Nelexa\GPlay\Enum\AgeEnum::SIX_EIGHT(),
            GPlayApps::UNLIMIT
        );

        $appslist1 = [];



        foreach ($apps as $app) {
            array_push($appslist1, $app->getId());
        }

        $chunks = array_chunk($appslist1, 100);
//        dd($chunks);
        $appslist = $gplay->getAppsInfo($chunks[0]);


        $categories = $gplay->getCategories();

        return view('frontend.top-app', compact('categories'));
    }
}
