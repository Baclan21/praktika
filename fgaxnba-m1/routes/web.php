<?php

use App\Http\Controllers\Product;
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

Route::get('/map', function () {
    return view('map');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/katalog/{add?}',[App\Http\Controllers\Group::class, 'GroupUs' ])->name('katalog');
Route::get('/test', [Product::class,"baskets"])->name('test');
Route::get('/test/{id?}',[Product::class,"products"]);
Route::get('/test/{id?}/delete',[Product::class,"deletet"])->name('deletem');
Route::get('/about',[Product::class,"slider"])->name('about');
