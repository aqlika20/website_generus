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

// All
Route::get('/', 'GuestController@index')->name('index');
Route::get('/set', 'HomeController@index')->name('index');

Route::get('/doa-doa', 'Manage\DashboardController@doa')->name('dashboard.doa');
Route::get('/doa-doa/search','Manage\DashboardController@search')->name('search.doa');
Route::get('/dalil-dalil', 'Manage\DashboardController@dalil')->name('dashboard.dalil');


Route::get('/map', function () {
    return view('map');
});

Route::get('/tentang', function () {
    return view('about');
});

Route::get('/register', 'Manage\RegisterController@index')->name('register');
Route::patch('/register/add', 'Manage\RegisterController@storeRegister')->name('register.store');


// Admin
Route::group(['middleware' => ['auth', 'checkRole:1']], function() {
    Route::prefix('/admin')->group(function(){
        Route::prefix('/home')->group(function(){
            Route::get('/', 'Manage\DashboardController@index')->name('home.admin');
        });

        Route::prefix('/manage')->group(function(){
            Route::prefix('/attendance')->group(function(){
                Route::get('/', 'Manage\AttendanceController@index')->name('attendance');
                Route::post('/add', 'Manage\AttendanceController@store')->name('attendance.store');
                Route::post('/attach', 'Manage\AttendanceController@attach')->name('attendance.attach');
                Route::get('/view', 'Manage\AttendanceController@view')->name('attendance.view');
                Route::get('/edit/{id}', 'Manage\AttendanceController@edit')->name('attendance.edit');
                Route::get('/detail/{id}', 'Manage\AttendanceController@detail')->name('attendance.detail');
                Route::put('/edited/{id}', 'Manage\AttendanceController@update')->name('attendance.edit.store');
                Route::delete('/delete/{id}', 'Manage\AttendanceController@delete')->name('attendance.delete');
            });

            Route::prefix('/berita')->group(function(){
                Route::get('/', 'Manage\BeritaController@index')->name('berita');
                Route::patch('/add', 'Manage\BeritaController@store')->name('berita.store');
                Route::get('/view/{id}', 'Manage\BeritaController@view')->name('berita.view');
                Route::patch('/edit/{id}', 'Manage\BeritaController@edit')->name('berita.edit');
                Route::delete('/delete/{id}', 'Manage\BeritaController@delete')->name('berita.delete');
            });

            Route::prefix('/doa')->group(function(){
                Route::get('/', 'Manage\DoaController@index')->name('doa');
                Route::patch('/add', 'Manage\DoaController@store')->name('doa.store');
                Route::get('/view/{id}', 'Manage\DoaController@view')->name('doa.view');
                Route::patch('/edit/{id}', 'Manage\DoaController@edit')->name('doa.edit');
                Route::delete('/delete/{id}', 'Manage\DoaController@delete')->name('doa.delete');
            });

            Route::prefix('/dalil')->group(function(){
                Route::get('/', 'Manage\DalilController@index')->name('dalil');
                Route::patch('/add', 'Manage\DalilController@store')->name('dalil.store');
                Route::get('/view/{id}', 'Manage\DalilController@view')->name('dalil.view');
                Route::patch('/edit/{id}', 'Manage\DalilController@edit')->name('dalil.edit');
                Route::delete('/delete/{id}', 'Manage\DalilController@delete')->name('dalil.delete');
            });

            Route::prefix('/pengumuman')->group(function(){
                Route::get('/', 'Manage\PengumumanController@index')->name('pengumuman');
                Route::patch('/add', 'Manage\PengumumanController@store')->name('pengumuman.store');
                Route::get('/view/{id}', 'Manage\PengumumanController@view')->name('pengumuman.view');
                Route::patch('/edit/{id}', 'Manage\PengumumanController@edit')->name('pengumuman.edit');
                Route::delete('/delete/{id}', 'Manage\PengumumanController@delete')->name('pengumuman.delete');
            });

            Route::prefix('/content')->group(function(){
                Route::get('/', 'Manage\ContentController@index')->name('content');
                Route::patch('/add', 'Manage\ContentController@store')->name('content.store');
                Route::get('/view/{id}', 'Manage\ContentController@view')->name('content.view');
                Route::patch('/edit/{id}', 'Manage\ContentController@edit')->name('content.edit');
                Route::delete('/delete/{id}', 'Manage\ContentController@delete')->name('content.delete');
            });

            Route::prefix('/navigation')->group(function(){
                Route::get('/', 'Manage\NavigationController@index')->name('navigation');
                Route::patch('/add', 'Manage\NavigationController@store')->name('navigation.store');
                Route::get('/view/{id}', 'Manage\NavigationController@view')->name('navigation.view');
                Route::patch('/edit/{id}', 'Manage\NavigationController@edit')->name('navigation.edit');
                Route::delete('/delete/{id}', 'Manage\NavigationController@delete')->name('navigation.delete');
            });

            Route::prefix('/setting')->group(function(){
                Route::get('/', 'Manage\SettingController@index')->name('setting');
                Route::get('/icon', 'Manage\IconController@index')->name('icon');

                Route::get('/banner', 'Manage\SettingController@banner')->name('banner');
                Route::patch('/banner/add', 'Manage\SettingController@storeBanner')->name('banner.store');
                
                Route::get('/about', 'Manage\SettingController@about')->name('about');
                Route::patch('/about/add', 'Manage\SettingController@storeAbout')->name('about.store');
                
                Route::get('/organisation', 'Manage\SettingController@organisation')->name('organisation');
                Route::patch('/organisation/add', 'Manage\SettingController@storeOrganisation')->name('organisation.store');
                
                Route::get('/address', 'Manage\SettingController@address')->name('address');
                Route::patch('/address/add', 'Manage\SettingController@storeAddress')->name('address.store');
                
                Route::get('/social', 'Manage\SettingController@social')->name('social');
                Route::patch('/social/add', 'Manage\SettingController@storeSocial')->name('social.store');
                
                Route::get('/user', 'Manage\UserController@index')->name('user');
                Route::patch('/user/add', 'Manage\UserController@storeUser')->name('user.store');
                Route::get('/user/view/{id}', 'Manage\UserController@view')->name('user.view');
                Route::patch('/user/edit/{id}', 'Manage\UserController@edit')->name('user.edit');
                Route::delete('/user/delete/{id}', 'Manage\UserController@delete')->name('user.delete');

                Route::prefix('/kegiatan')->group(function(){
                    Route::get('/', 'Manage\KegiatanController@index')->name('kegiatan');
                    Route::patch('/add', 'Manage\KegiatanController@store')->name('kegiatan.store');
                    Route::get('/view/{id}', 'Manage\KegiatanController@view')->name('kegiatan.view');
                    Route::patch('/edit/{id}', 'Manage\KegiatanController@edit')->name('kegiatan.edit');
                    Route::delete('/delete/{id}', 'Manage\KegiatanController@delete')->name('kegiatan.delete');
                });
            });

            Route::get('/profile', 'Manage\UserController@profile')->name('profile');
            Route::patch('/profile/{id}', 'Manage\UserController@profileEdit')->name('profile.edit');
            Route::patch('/profile/pass/{id}', 'Manage\UserController@profileEditPass')->name('profile.edit.pass');
            // Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
            
        });
    });
}); 

// Generus
Route::group(['middleware' => ['auth', 'checkRole:2']], function() {
    Route::prefix('/home')->group(function(){
        Route::get('/', 'Manage\DashboardController@home')->name('home.user');
    });
    Route::prefix('/profile')->group(function(){
        Route::get('/', 'ProfileController@index')->name('profile');
        Route::patch('/profile/{id}', 'ProfileController@profileEdit')->name('profile.edit');
    });

}); 


Auth::routes(['register' => false]);
// Auth::routes();

