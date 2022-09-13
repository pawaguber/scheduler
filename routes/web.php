<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();


Route::group(['namespace' => 'App\Http\Controllers\Profile', 'prefix' => 'profile', 'middleware' => 'auth'], function (){
    Route::get('/', IndexController::class)->name('profile.index');
//    Route::get('/setting', SettingController::class)->name('profile.password.index');
//    Route::post('/setting', UpdateController::class)->name('profile.password.update');


        Route::group(['namespace' => 'Schedule', 'prefix' => 'scheduler'], function (){
            Route::post('/', StoreController::class)->name('profile.scheduler.store');
            Route::patch('/{schedule}', UpdateController::class)->name('profile.scheduler.update');
            Route::delete('/{schedule}', DestroyController::class)->name('profile.scheduler.destroy');
        });

});
