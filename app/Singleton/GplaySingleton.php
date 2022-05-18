<?php


namespace App\Singleton;


use Nelexa\GPlay\GPlayApps;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Psr16Cache;

class GplaySingleton
{
    private static $instance;

    public GPlayApps $gplay;

    private static $topAppsList = [];

    private function __construct()
    {
        $this->boot();
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new GplaySingleton();
        }
        return self::$instance;
    }

    private function boot()
    {
        set_time_limit(0);
        $gplay = new GPlayApps($defaultLocale = 'en_US', $defaultCountry = 'us');

        $cache = new Psr16Cache(
            new FilesystemAdapter()
        );
        $gplay->setCache($cache, \DateInterval::createFromDateString('1 hour'));

        $gplay->setCacheTtl(\DateInterval::createFromDateString('1 hour'));
        $gplay->setConcurrency(190);
        $this->gplay = $gplay;
    }

    public static function getTopAppsList()
    {
        return self::$topAppsList;
    }

    public static function setTopAppsList($topAppsList)
    {
        self::$topAppsList = $topAppsList;
        self::$instance = new GplaySingleton();
    }
}
