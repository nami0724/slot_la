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
    return view('login');

});
Route::get('slot','App\Http\Controllers\SlotController@index');
Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/logout','App\Http\Controllers\LoginController@logout');
Route::get('/point', 'PointController@money');
Route::get('/ajax/points', 'App\Http\Controllers\Ajax\PointController@money');

Route::prefix('point')->group(function() {
    Route::get('/create', 'App\Http\Controllers\PointController@create');
    Route::get('/update', 'App\Http\Controllers\PointController@update');
    Route::get('/save', 'App\Http\Controllers\PointController@save');
});