<?php

use App\Http\Controllers\TopChartAppController;
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


require __DIR__.'/auth.php';
