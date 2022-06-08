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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);

Route::get('/map', function () {
    return view('map');
});

Route::get('/home', [App\Http\Controllers\Manage\DashboardController::class, 'index'])->name('home');
Route::get('/setting', [App\Http\Controllers\Manage\SettingController::class, 'index'])->name('setting');
Route::get('/icon', [App\Http\Controllers\Manage\IconController::class, 'index'])->name('icon');

Route::get('/content', [App\Http\Controllers\Manage\ContentController::class, 'index'])->name('content');
Route::patch('/content/add', [App\Http\Controllers\Manage\ContentController::class, 'store'])->name('content.store');
Route::get('/content/view/{id}', [App\Http\Controllers\Manage\ContentController::class, 'view'])->name('content.view');
Route::patch('/content/edit/{id}', [App\Http\Controllers\Manage\ContentController::class, 'edit'])->name('content.edit');
Route::delete('/content/delete/{id}', [App\Http\Controllers\Manage\ContentController::class, 'delete'])->name('content.delete');

Route::get('/navigation', [App\Http\Controllers\Manage\NavigationController::class, 'index'])->name('navigation');
Route::patch('/navigation/add', [App\Http\Controllers\Manage\NavigationController::class, 'store'])->name('navigation.store');
Route::get('/navigation/view/{id}', [App\Http\Controllers\Manage\NavigationController::class, 'view'])->name('navigation.view');
Route::patch('/navigation/edit/{id}', [App\Http\Controllers\Manage\NavigationController::class, 'edit'])->name('navigation.edit');
Route::delete('/navigation/delete/{id}', [App\Http\Controllers\Manage\NavigationController::class, 'delete'])->name('navigation.delete');

Route::get('/banner', [App\Http\Controllers\Manage\SettingController::class, 'banner'])->name('banner');
Route::patch('/banner/add', [App\Http\Controllers\Manage\SettingController::class, 'storeBanner'])->name('banner.store');

Route::get('/about', [App\Http\Controllers\Manage\SettingController::class, 'about'])->name('about');
Route::patch('/about/add', [App\Http\Controllers\Manage\SettingController::class, 'storeAbout'])->name('about.store');

Route::get('/organisation', [App\Http\Controllers\Manage\SettingController::class, 'organisation'])->name('organisation');
Route::patch('/organisation/add', [App\Http\Controllers\Manage\SettingController::class, 'storeOrganisation'])->name('organisation.store');

Route::get('/address', [App\Http\Controllers\Manage\SettingController::class, 'address'])->name('address');
Route::patch('/address/add', [App\Http\Controllers\Manage\SettingController::class, 'storeaddress'])->name('address.store');

Route::get('/user', [App\Http\Controllers\Manage\UserController::class, 'index'])->name('user');
Route::patch('/user/add', [App\Http\Controllers\Manage\UserController::class, 'storeUser'])->name('user.store');
Route::get('/user/view/{id}', [App\Http\Controllers\Manage\UserController::class, 'view'])->name('user.view');
Route::patch('/user/edit/{id}', [App\Http\Controllers\Manage\UserController::class, 'edit'])->name('user.edit');
Route::delete('/user/delete/{id}', [App\Http\Controllers\Manage\UserController::class, 'delete'])->name('user.delete');

Route::get('/profile', [App\Http\Controllers\Manage\UserController::class, 'profile'])->name('profile');
Route::patch('/profile/{id}', [App\Http\Controllers\Manage\UserController::class, 'profileEdit'])->name('profile.edit');
Route::patch('/profile/pass/{id}', [App\Http\Controllers\Manage\UserController::class, 'profileEditPass'])->name('profile.edit.pass');

Route::get('/tentang', function () {
    return view('about');
});

Route::prefix('/manage')->group(function(){
    Auth::routes(['register' => false, 'reset' => false]);
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::get('/', [App\Http\Controllers\Manage\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\Manage\DashboardController::class, 'index'])->name('home1');
});