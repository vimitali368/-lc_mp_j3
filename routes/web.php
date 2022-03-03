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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => 'Theme', 'prefix' => 'themes'], function () {
    Route::get('/', 'IndexController')->name('theme.index');

    Route::group(['prefix' => '{theme}'], function () {
        Route::get('/', 'ShowController')->name('theme.show');
    });
});

Auth::routes();

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin');
    });

    Route::group(['namespace' => 'Client', 'prefix' => 'clients'], function () {
        Route::get('/', 'IndexController')->name('admin.client.index');
        Route::get('/create', 'CreateController')->name('admin.client.create');
        Route::post('/store', 'StoreController')->name('admin.client.store');
        Route::get('/{client}', 'ShowController')->name('admin.client.show');
        Route::get('/{client}/edit', 'EditController')->name('admin.client.edit');
        Route::patch('/{client}', 'UpdateController')->name('admin.client.update');
        Route::delete('/{client}', 'DeleteController')->name('admin.client.delete');
    });

    Route::group(['namespace' => 'Theme', 'prefix' => 'themes'], function () {
        Route::get('/', 'IndexController')->name('admin.theme.index');
        Route::get('/create', 'CreateController')->name('admin.theme.create');
        Route::post('/store', 'StoreController')->name('admin.theme.store');
        Route::get('/{theme}', 'ShowController')->name('admin.theme.show');
        Route::get('/{theme}/edit', 'EditController')->name('admin.theme.edit');
        Route::patch('/{theme}', 'UpdateController')->name('admin.theme.update');
        Route::delete('/{theme}', 'DeleteController')->name('admin.theme.delete');
    });

    Route::group(['namespace' => 'Photo', 'prefix' => 'photos'], function () {
        Route::get('/', 'IndexController')->name('admin.photo.index');
        Route::get('/create', 'CreateController')->name('admin.photo.create');
        Route::post('/store', 'StoreController')->name('admin.photo.store');
        Route::get('/{photo}', 'ShowController')->name('admin.photo.show');
        Route::get('/{photo}/edit', 'EditController')->name('admin.photo.edit');
        Route::patch('/{photo}', 'UpdateController')->name('admin.photo.update');
        Route::delete('/{photo}', 'DeleteController')->name('admin.photo.delete');
    });

});
