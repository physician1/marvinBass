<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Models\Series;

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


Route::get('/', function (){

    $featuredSeries = Series::take(3)->latest()->get();

    return view('front', compact(['featuredSeries']));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/series/{series}/episodes/{episodeNumber}', 'SeriesController@episode')->name('series.episode');
Route::resource('/series', 'App\Http\Controllers\SeriesController');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware'=> ['auth']], function() {

    Route::post('checkout', [PaymentController::class, 'checkout'])->name('checkout');

    Route::get('callback', [PaymentController::class, 'callback'])->name('callback');



    Route::group(['middleware' => ['plans.active']], function() {

        Route::get('/series/{series}/episodes/{episodeNumber}', [App\Http\Controllers\SeriesController::class, 'episode'])->name('series.episode');


    });

});
