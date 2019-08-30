<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();
Route::get('/home', 'HomeController@index');
//前台界面
Route::group(['domain' => 'www.icycn.com'], function () {
    Route::get('/','Frontend\IndexController@Index');
    Route::get('news/{id}.shtml','Frontend\ArticleController@NewsArticle')->where('id', '[0-9]+')->name('news');
    Route::get('xm/{id}.shtml','Frontend\ArticleController@BrandArticle')->where('id', '[0-9]+');
    Route::get('paihangbang/{path?}','Frontend\PaihangbangController@Paihangbang')->where('path', '[a-zA-Z_\/0-9]+');
    Route::post('phone/complate/','Frontend\PhoneController@ComplateBrands');
    Route::post('search','Frontend\SeacrhController@SeacrhBrand')->name('search');
    Route::get('search','Frontend\SeacrhController@SeacrhBrand');
    Route::get('{path}/filter/p{id}/','Frontend\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','id'=>'[0-9]+'])->name('projectlists');
    Route::get('{path}/filter/m{id}/','Frontend\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','id'=>'[0-9]+'])->name('projectlists');
    Route::get('{path}/filter/a{id}/','Frontend\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','id'=>'[0-9]+'])->name('projectlists');
    Route::get('{path}/page/{page}','Frontend\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
    Route::get('{path}','Frontend\ListNewsController@listNews')->where('path','[a-zA-Z0-9/_]+')->name('newslist');
});


Route::get('/','Mobile\IndexController@Index');
Route::get('news/{id}.shtml','Mobile\ArticleController@NewsArticle')->where('id', '[0-9]+')->name('news');
Route::get('xm/{id}.shtml','Mobile\ArticleController@BrandArticle')->where('id', '[0-9]+');
Route::get('paihangbang/{path?}','Mobile\PaihangbangController@Paihangbang')->where('path', '[a-zA-Z_\/0-9]+');
Route::post('search','Mobile\SeacrhController@SeacrhBrand')->name('search');
Route::get('search','Mobile\SeacrhController@SeacrhBrand');
Route::get('{path}/filter/p{id}/','Mobile\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','id'=>'[0-9]+'])->name('projectlists');
Route::get('{path}/filter/m{id}/','Mobile\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','id'=>'[0-9]+'])->name('projectlists');
Route::get('{path}/filter/a{id}/','Mobile\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','id'=>'[0-9]+'])->name('projectlists');
Route::get('{path}/page/{page}','Mobile\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
Route::get('{path}','Mobile\ListNewsController@listNews')->where('path','[a-zA-Z0-9/_]+')->name('newslist');

Route::post('/phonecomplate/','Frontend\PhoneController@phoneComplate');
