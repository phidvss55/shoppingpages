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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::group(['prefix' => 'category'], function() {
        Route::get('/', 'AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create', 'AdminCategoryController@create')->name('admin.get.create.category');
        Route::post('/create', 'AdminCategoryController@store');
        Route::get('/update/{id}', 'AdminCategoryController@edit')->name('admin.get.edit.category');
        Route::post('/update/{id}', 'AdminCategoryController@update');
        Route::get('{action}/{id}', 'AdminCategoryController@action')->name('admin.get.action.category');
    });

    Route::group(['prefix' => 'product'], function() {
        Route::get('/', 'AdminProductController@index')->name('admin.get.list.product');
        Route::get('/create', 'AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create', 'AdminProductController@store');
        Route::get('/update/{id}', 'AdminProductController@edit')->name('admin.get.edit.product');
        Route::post('/update/{id}', 'AdminProductController@update');
        Route::get('{action}/{id}', 'AdminProductController@action')->name('admin.get.action.product');
    });

    Route::group(['prefix' => 'article'], function() {
        Route::get('/', 'AdminArticleController@index')->name('admin.get.list.article');
        Route::get('/create', 'AdminArticleController@create')->name('admin.get.create.article');
        Route::post('/create', 'AdminArticleController@store');
        Route::get('/update/{id}', 'AdminArticleController@edit')->name('admin.get.edit.article');
        Route::post('/update/{id}', 'AdminArticleController@update');
        Route::get('{action}/{id}', 'AdminArticleController@action')->name('admin.get.action.article');
    });

    //ql don ahng
    Route::group(['prefix' => 'transaction'], function() {
        Route::get('/', 'AdminTransactionController@index')->name('admin.get.list.transaction');
        Route::get('/view/{id}', 'AdminTransactionController@viewOrder')->name('admin.get.view.order');
        Route::get('{action}/{id}', 'AdminTransactionController@action')->name('admin.get.action.transaction');
    });

    //ql user
    Route::group(['prefix' => 'user'], function() {
        Route::get('/', 'AdminUserController@index')->name('admin.get.list.user');
    });

    //ql thanh vien
    Route::group(['prefix' => 'rating'], function() {
        Route::get('/', 'AdminRatingController@index')->name('admin.get.list.rating');
    });

    //quan ly lien he -> if error -> change to web.php outside
    Route::get('lien-he', 'ContactController@getContact')->name('get.contact');
    Route::post('lien-he', 'ContactController@saveContact');

});
