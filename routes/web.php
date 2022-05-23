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
    return view('manage.dashboard');
});

Route::get('/home', [App\Http\Controllers\Manage\DashboardController::class, 'index'])->name('home');
Route::get('/content', [App\Http\Controllers\Manage\ContentController::class, 'index'])->name('content');
Route::get('/navigation', [App\Http\Controllers\Manage\NavigationController::class, 'index'])->name('navigation');
Route::get('/setting', [App\Http\Controllers\Manage\SettingController::class, 'index'])->name('setting');
Route::get('/banner', [App\Http\Controllers\Manage\SettingController::class, 'banner'])->name('banner');
Route::get('/about', [App\Http\Controllers\Manage\SettingController::class, 'about'])->name('about');
Route::get('/organisation', [App\Http\Controllers\Manage\SettingController::class, 'organisation'])->name('organisation');
Route::get('/address', [App\Http\Controllers\Manage\SettingController::class, 'address'])->name('address');
Route::get('/user', [App\Http\Controllers\Manage\UserController::class, 'index'])->name('user');
Route::get('/profile', [App\Http\Controllers\Manage\UserController::class, 'profile'])->name('profile');


Route::get('/tentang', function () {
    return view('about');
});

Route::prefix('/manage')->group(function(){
    Auth::routes(['register' => false, 'reset' => false]);
    Route::get('/', [App\Http\Controllers\Manage\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\Manage\DashboardController::class, 'index'])->name('home');
});