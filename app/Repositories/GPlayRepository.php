<?php


namespace App\Repositories;

use App\Singletons\GplaySingleton;
use Illuminate\Support\Facades\Redis;
use Nelexa\GPlay\GPlayApps;

class GPlayRepository
{
    public function getCategories()
    {

        $gplay = GplaySingleton::getInstance()->gplay;
        $redis = Redis::connection();

        if (!$redis->exists('CATEGORIES') && $redis->get('CATEGORIES') == null) {
            $categories = $gplay->getCategories();
            foreach ($categories as $category) {
                $redis->command("hset", ["CATEGORIES:{$category->getId()}", "id" , $category->getId(), "name", $category->getName() ]);
                $redis->command("sadd", ["CATEGORIES", $category->getName()]);
            }

        } else {
            $categories = $redis->sMembers('CATEGORIES');
        }

        return $categories;
    }

    public function getTopAppsInCategory($category, $ageLimit, $numOfApps)
    {
        $gplay = GplaySingleton::getInstance()->gplay;
        $redis = Redis::connection();


        if (!$redis->exists("TOP_APPS:{$category}:{$ageLimit}")) {

            $gplayTopApps = $gplay->getTopApps(
                $category,
                $ageLimit,
                $numOfApps
            );

            dd($gplayTopApps);

            foreach ($gplayTopApps as $app) {
                // Saving list of top apps ids in redis
                $redis->command('RPUSH', ["TOP_APPS:{$category}:{$ageLimit}", $app->getId()]);

                // Saving list of top apps in redis
                $redis->command("HSET", ["TOP_APPS:{$category}:{$ageLimit}:{$app->getId()}",
                    "id" , $app->getId(),
                    "name", $app->getName(),
                    "url", $app->getUrl(),
                    "local", $app->getLocale(),
                    "country", $app->getCountry(),
                    "summary", $app->getSummary(),
                    "icon", $app->getIcon(),
                    "score", $app->getScore(),
                    "developer_name", $app->getDeveloper()->getName(),
                    "developer", "DEVELOPERS:{$app->getDeveloper()->getId()}",
                ]);

                $redis->command("HSET", ["DEVELOPERS:{$app->getDeveloper()->getId()}",
                    "id" , $app->getDeveloper()->getId(),
                    "name", $app->getDeveloper()->getName(),
                    "url", $app->getDeveloper()->getUrl(),
                    "description", $app->getDeveloper()->getDescription() ?? "none",
                    "icon", $app->getDeveloper()->getIcon() ?? "none",
                    "website", $app->getDeveloper()->getWebsite() ?? "none",
                    "cover", $app->getDeveloper()->getCover() ?? "none",
                    "email", $app->getDeveloper()->getEmail() ?? "none",
                    "address", $app->getDeveloper()->getAddress() ?? "none",
                ]);

                $appInfo = $gplay->getAppInfo($app->getId());


                if ($redis->exists("TOP_APPS:{$category}:{$ageLimit}:{$app->getId()}") ) {
                    $redis->command("HSET", ["TOP_APPS:{$category}:{$ageLimit}:{$app->getId()}",
                        "price_text" , $app->getPriceText() ?? 0,
                        "is_free" , $app->isFree() ?? false,
                        "description" , $appInfo->getDescription() ?? "none",
                        "is_auto_translated_description" , $appInfo->isAutoTranslatedDescription(),
                        "translated_from_local" , $appInfo->getTranslatedFromLocale(),
                        "cover_url" , $appInfo->getCover()->getUrl(),
                        "cover_orginal_url" , $appInfo->getCover()->getOriginalSizeUrl(),
                        "category" , $appInfo->getCategory()->getName(),
                        "category_id" , $appInfo->getCategory()->getId(),
                        "is_game_category" , $appInfo->getCategory()->isGamesCategory(),
                        "is_family_category" , $appInfo->getCategory()->isFamilyCategory(),
                        "is_application_category" , $appInfo->getCategory()->isApplicationCategory(),
                        "category_family" , $appInfo->getCategoryFamily(),
//                            "video_url" , $appInfo->getVideo()->getVideoUrl(),
//                            "video_youtube_id" , $appInfo->getVideo()->getYoutubeId(),
                        "recent_changes" , $appInfo->getRecentChanges(),
                        "is_editors_choice" , $appInfo->isEditorsChoice() ?? false,
                        "installs" , $appInfo->getInstalls() ?? 0,
                        "currency" , $appInfo->getCurrency(),
                        "is_contains_iap" , $appInfo->isContainsIAP() ?? false,
                        "offers_iap_cost" , $appInfo->getOffersIAPCost(),
                        "is_contains_ads" , $appInfo->isContainsAds() ?? false,
                        "size" , $appInfo->getSize(),
                        "app_version" , $appInfo->getAppVersion(),
                        "android_version" , $appInfo->getAndroidVersion(),
                        "min_android_version" , $appInfo->getMinAndroidVersion(),
                        "content_rating" , $appInfo->getContentRating(),
                        "privacy_policy_url" , $appInfo->getPrivacyPoliceUrl(),
//                        "released" , $appInfo->getReleased()->date,
//                        "updated" , $appInfo->getUpdated()->date,
                        "number_voters" , $appInfo->getNumberVoters(),
                        "number_reviews" , $appInfo->getNumberReviews(),
                        // TODO: REVIEWS
                        // TODO: HISTOGRAM
                        // TODO: SCREENSHOTS
                    ]);

                }



            }

            return $this->getSavedTopAppsInRedis($redis, $category, $ageLimit);
        } else {
            return $this->getSavedTopAppsInRedis($redis, $category, $ageLimit);
        }


    }

    private function getSavedTopAppsInRedis($redis, $category, $ageLimit)
    {
        $topApps = [];

        // get top apps ids from redis
        $topAppsIds = $redis->lrange("TOP_APPS:{$category}:{$ageLimit}", 0, -1);

//        dd($topAppsIds);

        // get all fields from hashes
        foreach ($topAppsIds as $appId) {
            $appHashInfo = $redis->hgetall("TOP_APPS:{$category}:{$ageLimit}:{$appId}");

            // get developer info from hash and replace it on app hash object
            if ($redis->exists($appHashInfo["developer"])) {
                $appDeveloper = $redis->hgetall($appHashInfo["developer"]);

                $appHashInfo["developer"] = $appDeveloper;
            }

            $topApps[] = $appHashInfo;
        }

        return $topApps;
    }

}
