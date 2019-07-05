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

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'BlogController@showBlog')->name('show.blog');
    Route::get('{id}/view', 'BlogController@view')->name('blog.view');
});
Route::get('/login', 'LoginController@showLogin')->name('show.login');
Route::post('/login', 'LoginController@login')->name('user.login');
Route::get('/logout', 'LogoutController@showLogin')->name('user.logout');