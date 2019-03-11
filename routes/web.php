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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/google', 'Auth\LoginController@redirectToProvider')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback')->name('login.google.callback');


Route::namespace('Admin')->prefix('admin')->middleware('auth')->group(function (){
    Route::resource('admin', 'AdminController');
    Route::resource('products', 'ProductController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'categoryController');
    Route::resource('sliders', 'SliderController');
    Route::resource('filters', 'FilterController');

});

//Route::get('/admin/gallery/{$product}', 'ProductController@gallery')->name('products.gallery');
Route::get('/admin/gallery', 'Admin\ProductController@gallery')->name('gallery.create');
Route::post('/admin/gallery', 'Admin\ProductController@upload')->name('gallery.upload');

Auth::routes();