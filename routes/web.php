<?php

use App\Http\Controllers\AuthController;
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
/*
Route::get('/', function () {
    return view('pages.components');
});*/

Route::view('/','pages.home')->name('components');
Route::view('/about','pages.about')->name('about');
Route::view('/brand','pages.brand')->name('brand');
Route::view('/special','pages.special')->name('special');
Route::view('/contacts','pages.contacts')->name('contacts');
Route::view('/login','pages.login')->name('login');
Route::match(['post', 'get'], '/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


