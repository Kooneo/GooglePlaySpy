<?php

use App\Http\Controllers\TopChartAppController;
use App\Singletons\GplaySingleton;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/dashboard', function () {
    return view('frontend.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/top', [TopChartAppController::class, 'index'])->middleware(['auth'])->name('top-apps');
Route::post('/load-more', [TopChartAppController::class, 'loadMoreApps'])->middleware(['auth'])->name('ajax.loadmore.apps');

Route::get('/playground', function () {
//    $gplay = new \Nelexa\GPlay\GPlayApps( );
//    $category = \Nelexa\GPlay\Enum\CategoryEnum::GAME();
//    $age = \Nelexa\GPlay\Enum\AgeEnum::FIVE_UNDER();
//    $topApps = $gplay->getTopApps(category: $category, age: $age, limit: 10);
    $redis = Redis::connection();

    $topApps = $redis->command("LRANGE", ["TOP_APPS:GAME:AGE_RANGE1", 0, -1]);
    dd($topApps);

//    foreach ($topApps as $app) {
//        dd($app);
//        $redis->command("sadd", ["TOP_APPS:{$category}:{$age}", $app->getName()]);
//        if ($app != null) {
//            $redis->command("hset", ["TOP_APPS:{$category}:{$age}:{$app->getId()}",
//                "id" , $app->getId(),
//                "name", $app->getName(),
//                "url", $app->getUrl(),
//                "local", $app->getLocale(),
//                "country", $app->getCountry(),
//                "summary", $app->getSummary(),
//                "icon", $app->getIcon(),
//                "score", $app->getScore(),
//                "developer_name", $app->getDeveloper()->getName(),
//                "developer", "DEVELOPERS:{$app->getDeveloper()->getId()}",
//            ]);
//
//            $redis->command("hset", ["DEVELOPERS:{$app->getDeveloper()->getId()}",
//                "id" , $app->getDeveloper()->getId(),
//                "name", $app->getDeveloper()->getName(),
//                "url", $app->getDeveloper()->getUrl(),
//                "description", $app->getDeveloper()->getDescription() ?? "none",
//                "icon", $app->getDeveloper()->getIcon() ?? "none",
//                "website", $app->getDeveloper()->getWebsite() ?? "none",
//                "cover", $app->getDeveloper()->getCover() ?? "none",
//                "email", $app->getDeveloper()->getEmail() ?? "none",
//                "address", $app->getDeveloper()->getAddress() ?? "none",
//            ]);
//        }
//    }
//    dd($topApps);
});

require __DIR__.'/auth.php';
