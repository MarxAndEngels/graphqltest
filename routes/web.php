<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitesController;
use App\Http\Controllers\DealerController;
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
//    return view('welcome');
    return redirect()->route('filament.auth.login');
});

Route::get("/sites", SitesController::class)->name('sites.index');
Route::get("/dealer", DealerController::class)->name('dealer.index');
Route::get("/feeds", \App\Http\Controllers\FeedController::class)->name('feeds.index');
