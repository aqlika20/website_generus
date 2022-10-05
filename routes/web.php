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

Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/doa-doa', [App\Http\Controllers\HomeController::class, 'doa'])->name('dashboard.doa');
Route::get('/dalil-dalil', [App\Http\Controllers\HomeController::class, 'dalil'])->name('dashboard.dalil');

Route::get('/map', function () {
    return view('map');
});

Route::get('/tentang', function () {
    return view('about');
});

Route::prefix('/manage')->group(function(){
    Route::get('/home', [App\Http\Controllers\Manage\DashboardController::class, 'index'])->name('home');
    Route::get('/setting', [App\Http\Controllers\Manage\SettingController::class, 'index'])->name('setting');
    Route::get('/icon', [App\Http\Controllers\Manage\IconController::class, 'index'])->name('icon');

    Route::get('/berita', [App\Http\Controllers\Manage\BeritaController::class, 'index'])->name('berita');
    Route::patch('/berita/add', [App\Http\Controllers\Manage\BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/view/{id}', [App\Http\Controllers\Manage\BeritaController::class, 'view'])->name('berita.view');
    Route::patch('/berita/edit/{id}', [App\Http\Controllers\Manage\BeritaController::class, 'edit'])->name('berita.edit');
    Route::delete('/berita/delete/{id}', [App\Http\Controllers\Manage\BeritaController::class, 'delete'])->name('berita.delete');
    
    Route::get('/doa', [App\Http\Controllers\Manage\DoaController::class, 'index'])->name('doa');
    Route::patch('/doa/add', [App\Http\Controllers\Manage\DoaController::class, 'store'])->name('doa.store');
    Route::get('/doa/view/{id}', [App\Http\Controllers\Manage\DoaController::class, 'view'])->name('doa.view');
    Route::patch('/doa/edit/{id}', [App\Http\Controllers\Manage\DoaController::class, 'edit'])->name('doa.edit');
    Route::delete('/doa/delete/{id}', [App\Http\Controllers\Manage\DoaController::class, 'delete'])->name('doa.delete');

    Route::get('/dalil', [App\Http\Controllers\Manage\DalilController::class, 'index'])->name('dalil');
    Route::patch('/dalil/add', [App\Http\Controllers\Manage\DalilController::class, 'store'])->name('dalil.store');
    Route::get('/dalil/view/{id}', [App\Http\Controllers\Manage\DalilController::class, 'view'])->name('dalil.view');
    Route::patch('/dalil/edit/{id}', [App\Http\Controllers\Manage\DalilController::class, 'edit'])->name('dalil.edit');
    Route::delete('/dalil/delete/{id}', [App\Http\Controllers\Manage\DalilController::class, 'delete'])->name('dalil.delete');

    Route::get('/pengumuman', [App\Http\Controllers\Manage\PengumumanController::class, 'index'])->name('pengumuman');
    Route::patch('/pengumuman/add', [App\Http\Controllers\Manage\PengumumanController::class, 'store'])->name('pengumuman.store');
    Route::get('/pengumuman/view/{id}', [App\Http\Controllers\Manage\PengumumanController::class, 'view'])->name('pengumuman.view');
    Route::patch('/pengumuman/edit/{id}', [App\Http\Controllers\Manage\PengumumanController::class, 'edit'])->name('pengumuman.edit');
    Route::delete('/pengumuman/delete/{id}', [App\Http\Controllers\Manage\PengumumanController::class, 'delete'])->name('pengumuman.delete');

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
    Route::patch('/address/add', [App\Http\Controllers\Manage\SettingController::class, 'storeAddress'])->name('address.store');
    
    Route::get('/social', [App\Http\Controllers\Manage\SettingController::class, 'social'])->name('social');
    Route::patch('/social/add', [App\Http\Controllers\Manage\SettingController::class, 'storeSocial'])->name('social.store');
    
    Route::get('/user', [App\Http\Controllers\Manage\UserController::class, 'index'])->name('user');
    Route::patch('/user/add', [App\Http\Controllers\Manage\UserController::class, 'storeUser'])->name('user.store');
    Route::get('/user/view/{id}', [App\Http\Controllers\Manage\UserController::class, 'view'])->name('user.view');
    Route::patch('/user/edit/{id}', [App\Http\Controllers\Manage\UserController::class, 'edit'])->name('user.edit');
    Route::delete('/user/delete/{id}', [App\Http\Controllers\Manage\UserController::class, 'delete'])->name('user.delete');
    
    Route::get('/profile', [App\Http\Controllers\Manage\UserController::class, 'profile'])->name('profile');
    Route::patch('/profile/{id}', [App\Http\Controllers\Manage\UserController::class, 'profileEdit'])->name('profile.edit');
    Route::patch('/profile/pass/{id}', [App\Http\Controllers\Manage\UserController::class, 'profileEditPass'])->name('profile.edit.pass');


    Auth::routes(['register' => false, 'reset' => false]);
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    // Route::get('/', [App\Http\Controllers\Manage\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\Manage\DashboardController::class, 'index'])->name('home1');


});