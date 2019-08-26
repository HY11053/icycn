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
Route::group(['domain' => 'm.jjedu.com.cn'], function () {
    Route::get('/','Mobile\IndexController@Index');
    Route::get('news/{id}.shtml','Mobile\ArticleController@NewsArticle')->where('id', '[0-9]+')->name('news');
    Route::get('xm/{id}.shtml','Mobile\ArticleController@BrandArticle')->where('id', '[0-9]+');
    Route::get('paihangbang/{path?}','Mobile\PaihangbangController@Paihangbang')->where('path', '[a-zA-Z_\/0-9]+');
    Route::post('sprodlist/all/','Mobile\SeacrhController@SeacrhBrand');
    Route::get('sprodlist/all/','Mobile\SeacrhController@SeacrhBrand');
    Route::post('phone/complate/list/','Mobile\PhoneController@ComplateBrands');
    Route::get('{path}_{tid}_{cid}_{zid}','Mobile\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
    Route::get('{path}_{tid}_{cid}_{zid}/page/{page}','Mobile\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+','page'=>'[0-9]+'])->name('projectlistspage');
    Route::get('{path}/page/{page}','Mobile\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
    Route::get('{path}','Mobile\ListNewsController@listNews')->where('path','[a-zA-Z0-9/_]+')->name('newslist');
});

Route::group(['domain' => 'mip.jjedu.com.cn'], function () {
    Route::get('/','Mip\IndexController@Index');
    Route::get('news/{id}.shtml','Mip\ArticleController@NewsArticle')->where('id', '[0-9]+')->name('news');
    Route::get('xm/{id}.shtml','Mip\ArticleController@BrandArticle')->where('id', '[0-9]+');
    Route::get('paihangbang/{path?}','Mip\PaihangbangController@Paihangbang')->where('path', '[a-zA-Z_\/0-9]+');
    Route::post('sprodlist/all/','Mip\SeacrhController@SeacrhBrand');
    Route::get('sprodlist/all/','Mip\SeacrhController@SeacrhBrand');
    Route::post('phone/complate/list/','Mip\PhoneController@ComplateBrands');
    Route::get('{path}_{tid}_{cid}_{zid}','Mip\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
    Route::get('{path}_{tid}_{cid}_{zid}/page/{page}','Mip\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+','page'=>'[0-9]+'])->name('projectlistspage');
    Route::get('{path}/page/{page}','Mip\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
    Route::get('{path}','Mip\ListNewsController@listNews')->where('path','[a-zA-Z0-9/_]+')->name('newslist');
});
Route::get('/','Frontend\IndexController@Index');
Route::get('deletenews','Frontend\StatementController@DeleteNews');
Route::get('news/{id}.shtml','Frontend\ArticleController@NewsArticle')->where('id', '[0-9]+')->name('news');
Route::get('xm/{id}.shtml','Frontend\ArticleController@BrandArticle')->where('id', '[0-9]+');
Route::get('paihangbang/{path?}','Frontend\PaihangbangController@Paihangbang')->where('path', '[a-zA-Z_\/0-9]+');
Route::post('sprodlist/all/','Frontend\SeacrhController@SeacrhBrand');
Route::get('sprodlist/all/','Frontend\SeacrhController@SeacrhBrand');
Route::post('phone/complate/list/','Frontend\PhoneController@ComplateBrands');
Route::get('{path}_{tid}_{cid}_{zid}','Frontend\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
Route::get('{path}_{tid}_{cid}_{zid}/page/{page}','Frontend\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+','page'=>'[0-9]+'])->name('projectlistspage');
Route::get('{path}/page/{page}','Frontend\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
Route::get('{path}','Frontend\ListNewsController@listNews')->where('path','[a-zA-Z0-9/_]+')->name('newslist');
Route::post('/phonecomplate/','Frontend\PhoneController@phoneComplate');
