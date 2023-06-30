<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('slot_top','App\Http\Controllers\SlotController@index');

Route::get('/', function(){
    return view('login.index');

});
Route::get('slot','App\Http\Controllers\SlotController@index');
Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/logout','App\Http\Controllers\LoginController@logout');
Route::get('/point', 'PointController@money');
Route::get('/ajax/points', 'App\Http\Controllers\Ajax\PointController@money');

Route::group(['prefix' => 'point'], function() {
    Route::get('point/new', 'App\Http\Controllers\PointController@new')->name('point.create');//入力
    Route::get('point/create', 'App\Http\Controllers\PointController@create')->name('point.create');//
    Route::post('/update', 'App\Http\Controllers\PointController@update')->name('point.post');
    Route::get('/save', 'App\Http\Controllers\PointController@save')->name('point.save');
});

Route::prefix('points')->group(function() {
    Route::get('/create', [PointController::class, 'create'])->name('points.point');
    Route::get('/update/{point_id}', [PointController::class, 'update'])->name('points.update');
    Route::post('/save', [PointController::class, 'save'])->name('points.save');
});