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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@sitehome')->name('site.home');
Route::get('/dashboard/visit', 'SiteController@adminpanel')->name('dashboard.home');
// banner section
Route::get('/banner/add', 'SiteController@BannerAddForm')->name('BannerView');
Route::get('/banner/view', 'ViewController@BannerView')->name('BannerAddForm');
Route::post('/banner/insert', 'SiteController@Bannerinsert');
// about section

Route::get('/about/add', 'SiteController@AboutAddForm')->name('AboutAddForm');
Route::get('/about/view', 'SiteController@AboutView')->name('AboutView');
Route::post('/about/insert', 'SiteController@Aboutinsert');
// Experience section
Route::get('/experience/add', 'SiteController@ExprienceAddForm')->name('ExperiencesAddForm');
Route::get('/experience/view', 'SiteController@ExprienceView')->name('ExprienceView');
Route::post('/experience/insert', 'SiteController@ExperiencetInsert')->name('ExperiencetInsert');
Route::post('/experience/update', 'MsgController@ExperienceUpdate');
// Product section
Route::get('/product/add', 'SiteController@ProductAddForm')->name('ProductAddForm');
Route::post('/product/insert', 'SiteController@Productinsert')->name('ProductInsert');
Route::get('/product/table', 'SiteController@ProductTable')->name('ProductTable');
Route::get('/Product/View', 'SiteController@ProductView')->name('ProductView');
//service section
Route::get('service/add', 'SiteController@ServiceAddForm')->name('ServiceAddForm');
Route::get('service/view', 'MsgController@ServiceView')->name('ServiceView');
Route::post('/service/insert', 'SiteController@Serviceinsert');
//slider Section
Route::get('slider/add', 'SiteController@SliderAddForm')->name('SliderAddForm');
Route::get('slider/view', 'MsgController@SliderView')->name('SliderView');
Route::post('slider/insert', 'SiteController@SliderInsert')->name('SliderInsert');
//customer Section
Route::get('Partner/add', 'SiteController@PartnerAddForm')->name('PartnerAddForm');
Route::get('Partner/View', 'SiteController@PartnerView')->name('PartnerView');
Route::post('/Partner/insert', 'SiteController@PartnerInsert')->name('PartnerInsert');
//blog section
Route::get('Blog/View', 'SiteController@BlogView')->name('BlogView');
Route::get('Blog/add', 'SiteController@BlogAddForm')->name('BlogAddForm');
Route::post('Blog/insert', 'SiteController@BlogrInsert')->name('BlogInsert');
//message section
Route::get('msg/view', 'MsgController@viewmsg')->name('viewmsg');

Route::post('/message/insert', 'SiteController@Messageinsert');

Route::post('/message', 'MsgController@Message')->name('PartnerInse');


//aLL DELETE
Route::get('/Delete/Product/product{product_id}','MsgController@ProductDeleteProduct')->name('ProductDelete');
Route::get('/delete/product/{product_id}','MsgController@productdelete')->name('dl');
Route::get('slider/Delete/{product_id}','MsgController@sliderDelete')->name('sliderDelete');
Route::get('/delete/productb/{product_id}','MsgController@productbdelete')->name('dlb');
Route::get('/delete/producta/{product_id}','MsgController@productadelete')->name('dla');
Route::get('/delete/partner/{product_id}','MsgController@partnerdelete')->name('dlp');
Route::get('/delete/blog/{product_id}','MsgController@blogdelete')->name('dlblog');
Route::get('/service/blog/{product_id}','MsgController@servicedelete')->name('dlservice');
Route::get('/delete/producte/{product_id}','MsgController@productedelete')->name('dle');


//all edit
Route::get('/Update/Product/{ban_id}','MsgController@upadateProduct')->name('updateproduct');
Route::get('/edit/banner/{ban_id}','MsgController@upadate')->name('updateb');
Route::post('/product/update/product','MsgController@ProductUpdateProduct');
Route::post('/update/banner','MsgController@bannerupdate');
Route::get('/edit/about/{ban_id}','MsgController@upadateabout')->name('updatea');
Route::post('/update/about','MsgController@bannerabout');
Route::get('/edit/experience/{ban_id}','MsgController@upadatexperience')->name('updatee');
Route::post('/update/experience','MsgController@experienceupdate');
