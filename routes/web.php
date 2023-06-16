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

Route::get('slot','App\Http\Controllers\SlotController@index');
Route::get('login','App\Http\Controllers\LoginController@index');
Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/logout','App\Http\Controllers\LoginController@logout');
Route::get('/points', 'ContactController@point');
Route::post('/ajax/points', 'Ajax\PointController@point');

