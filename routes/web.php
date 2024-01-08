<?php

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
Route::group(['domain' => 'tapday2.noumanengr.com'], function () {
    Route::get('/', function () {
        dd('testing tapday2');
    });
});


// tapday2.noumanengr.com
Route::group(['domain' => 'tapday.noumanengr.com'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->middleware(['verify.shopify'])->name('home1');
});

