<?php

use App\Http\Controllers\Admin\CommonController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\User\CommonController as UserCommonController;
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

Route::get('/', [UserCommonController::class, 'index']);
Route::post('/', [ContactController::class, 'send'])->name('mail.send');

Route::prefix('/admin')->middleware(['auth'])->group(function () {
    Route::get('/general', [CommonController::class, 'general'])->name('general');
    Route::post('/general', [CommonController::class, 'store'])->name('general.store');
    Route::get('/profile', [CommonController::class, 'profile'])->name('profile');
    Route::post('/profile', [CommonController::class, 'createProfile'])->name('profile.create');
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::post('/setting/general', [SettingController::class, 'general'])->name('setting.general');
    Route::post('/address', [SettingController::class, 'address'])->name('setting.address');
    Route::post('/social', [SettingController::class, 'social'])->name('setting.social');
});

require __DIR__ . '/auth.php';
