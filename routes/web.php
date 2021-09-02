<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\car;

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
Route::get('Profile','App\Http\Controllers\userProfile@index');
Route::get('Delete','App\Http\Controllers\userProfile@delete');
Route::get('insert','App\Http\Controllers\userProfile@insert');
Route::get('update','App\Http\Controllers\userProfile@update');
Route::view('inner','inner');
Route::view('inner2','inner2');
Route::get('addcar',[car::class,'addCar']);
Route::post('carsubmit',[car::class,'moreCar']);
Route::get('viewcar',[car::class,'viewcar']);
