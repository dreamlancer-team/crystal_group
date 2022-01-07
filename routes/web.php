<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SettingController;
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
    return view('user.welcome');
});

Route::get('/about', function () {
    return view('user.about');
})->name('about');

Route::prefix('admin')->group(function () {
    Route::resource('/contact', ContactController::class);
    Route::resource('/setting', SettingController::class);
});
