<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Nelexa\GPlay\GPlayApps;

class AppListResult extends Component
{
    public $appslist = [];
    public $chunks ;
    public $apps;
    public $position = 0;

    private $gplay;

    public $Ids;

    public $newIds = [];

    public function mount()
    {

        // Cache The Data
        $this->gplay = new \Nelexa\GPlay\GPlayApps($defaultLocale = 'en_US', $defaultCountry = 'us');
        $cache = new \Symfony\Component\Cache\Psr16Cache(new \Symfony\Component\Cache\Adapter\FilesystemAdapter());
        $this->gplay->setCache($cache, \DateInterval::createFromDateString('1 hour'));
        $this->gplay->setCacheTtl(\DateInterval::createFromDateString('1 hour'));
        $this->gplay->setConcurrency(8);


        // Get all data
        $this->apps = $this->gplay->getTopApps(
            $category = \Nelexa\GPlay\Enum\CategoryEnum::GAME(),
            $ageLimit = \Nelexa\GPlay\Enum\AgeEnum::SIX_EIGHT(),
            GPlayApps::UNLIMIT
        );

        $appIds = [];

        foreach ($this->apps as $app) {
            array_push($appIds, $app->getId());
        }

        $this->Ids = $appIds;
        $this->chunks = array_chunk($this->Ids, 100);
        $this->appslist = $this->gplay->getAppsInfo($this->chunks[$this->position]);

    }

    public function render()
    {
        return view('livewire.app-list-result', ['appslist' => $this->appslist]);
    }

    public function load()
    {
        $this->position += 1;
    }

}
