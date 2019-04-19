<?php

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

use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/admin', 'AdminController@index')->name('home');
Route::get('food', 'FoodController@index()')->name('index');

Route::prefix('admin')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/', 'AdminController@getAllUser')->name('admin.users.list');
        Route::get('/add', 'AdminController@createUser')->name('admin.users.add');
        Route::post('/add', 'AdminController@storeUser')->name('admin.users.store');
        Route::get('/{id}/edit', 'AdminController@editUser')->name('admin.users.edit');
        Route::post('/{id}/update', 'AdminController@updateUser')->name('admin.users.update');
        Route::get('/{id}/delete', 'AdminController@deleteUser')->name('admin.users.delete');
        Route::get('/changePassword', 'AdminController@showChangePasswordForm')->name('admin.users.form');
        Route::post('/changePassword', 'AdminController@changePassword')->name('admin.users.change-password');
    });
    Route::prefix('foods')->group(function () {
        Route::get('/', 'AdminController@getAllFood')->name('admin.foods.list');
        Route::get('/add', 'AdminController@createFood')->name('admin.foods.add');
        Route::post('/add', 'AdminController@storeFood')->name('admin.foods.store');
        Route::get('/{id}/edit', 'AdminController@editFood')->name('admin.foods.edit');
        Route::post('/{id}/edit', 'AdminController@updateFood')->name('admin.foods.update');
        Route::get('/{id}/destroy', 'AdminController@destroyFood')->name('admin.foods.destroy');
    });

});
