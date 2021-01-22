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

Route::get('/', function () {
    return view('pages.components');
});

Route::view('/','pages.components')->name('components');
Route::view('/about','pages.about')->name('about');
Route::view('/brand','pages.brand')->name('brand');
Route::view('/special','pages.special')->name('special');
Route::view('/contacts','pages.contacts')->name('contacts');


