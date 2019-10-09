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

Route::get('/', 'Home\IndexController@index');
Route::get('/login', 'Home\LoginController@index');
Route::get('/register', 'Home\LoginController@register');
Route::get('/forget', 'Home\LoginController@forget');

Route::get('/article/lists', 'Home\ArticleController@index');
Route::get('/article/lists/{id}', 'Home\ArticleController@index');
Route::get('/article/detail/{id}', 'Home\ArticleController@detail');


Route::group(['prefix' => 'manage'], function () {
    Route::get('/login', 'Admin\LoginController@index')->name('admin.login');

    Route::get('/', 'Admin\IndexController@index')->name('admin.index');

    Route::group(['prefix' => 'article'], function () {
        Route::get('lists', 'Admin\ArticleController@index')->name('admin.article.lists');
        Route::any('add', 'Admin\ArticleController@add')->name('admin.article.add');
        Route::any('edit', 'Admin\ArticleController@edit')->name('admin.article.edit');
        Route::any('del', 'Admin\ArticleController@del')->name('admin.article.del');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('lists', 'Admin\UserController@index')->name('admin.user.lists');
        Route::any('add', 'Admin\UserController@add')->name('admin.user.add');
        Route::any('edit', 'Admin\UserController@edit')->name('admin.user.edit');
        Route::any('del', 'Admin\UserController@del')->name('admin.user.del');
    });

    Route::group(['prefix' => 'accountor'], function () {
        Route::get('lists', 'Admin\UserController@index')->name('admin.user.lists');
        Route::any('add', 'Admin\UserController@add')->name('admin.user.add');
        Route::any('edit', 'Admin\UserController@edit')->name('admin.user.edit');
        Route::any('del', 'Admin\UserController@del')->name('admin.user.del');
    });

});