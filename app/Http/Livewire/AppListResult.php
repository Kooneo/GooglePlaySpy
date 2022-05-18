<?php

namespace App\Http\Livewire;

use App\Jobs\loadTopApps;
use App\Singleton\GplaySingleton;
use Livewire\Component;
use Nelexa\GPlay\GPlayApps;

class AppListResult extends Component
{
    public $appslist = [];
    public $chunks ;
    public $position;

    public $apps;


    public $newIds = [];


    public $appsInfo;

    public $arrayLenght;

    public function mount()
    {
//        $gplay = GplaySingleton::getInstance()->gplay;
//        // Cache The Data
////        $gplay = new \Nelexa\GPlay\GPlayApps($defaultLocale = 'en_US', $defaultCountry = 'us');
////
////        // Get all data
//        $apps = $gplay->getTopApps(
//            $category = \Nelexa\GPlay\Enum\CategoryEnum::DATING(),
//            $ageLimit = \Nelexa\GPlay\Enum\AgeEnum::SIX_EIGHT(),
//        );
//
//        $this->apps = $apps;
//        $appIds = [];
//        $this->chunks = [];
//
//        foreach ($apps as $app) {
//            array_push($appIds, $app->getId());
//        }
//
//
//
//        $this->chunks = array_chunk($appIds, 50);
//
//        $this->arrayLenght = count($this->chunks);
//        $this->position = 0;


//
//        if (!$this->chunks[$this->position] == null) {
//            $newApps = $gplay->getAppsInfo($this->chunks[$this->position ?? 0]);
//            foreach ($newApps as $app) {
//                array_push($this->appslist, $app);
//            }
//        }

//        if ($this->chunks[$this->position] != null && is_array($this->chunks[$this->position])) {
////            $newApps = $gplay->getAppsInfo($this->chunks[$this->position]);
//
//            foreach ($this->chunks[$this->position] as $appId) {
//                $app = $gplay->getAppInfo($appId);
//                array_push($this->appslist, $app);
//            }
//
//
//            $this->position++;
////
////            foreach ($newApps as $app => $value) {
////                array_push($this->appslist, $value);
////            }
//        }
    }

    public function hydrate()
    {


    }

    public function render()
    {
//
//        // Cache The Data
//        $gplay = GplaySingleton::getInstance()->gplay;
//
//
////        dd($this->apps);
//
//        if (!$this->chunks[$this->position] == null) {
//            $newApps = $gplay->getAppsInfo($this->chunks[$this->position]);
//            if (!$newApps instanceof \Exception) {
//                foreach ($newApps as $app) {
//                    array_push($this->appslist, $app);
//                }
//            }
//
//        }
//
////        if ($this->chunks[$this->position] != null && is_array($this->chunks[$this->position])) {
//////            $newApps = $gplay->getAppsInfo($this->chunks[$this->position]);
////
////            foreach ($this->chunks[$this->position] as $appId) {
////                $app = $gplay->getAppInfo($appId);
////
////
////                array_push($this->appslist, $app);
////            }
//////
//////            foreach ($newApps as $app => $value) {
//////                array_push($this->appslist, $value);
//////            }
////        }
//
//        // refresh livewire model


        return view('livewire.app-list-result', ['appslist' => $this->appslist]);
    }

    public function load()
    {
//        if ($this->position != $this->arrayLenght) {
//            $this->position++;
//        }
    }

}
