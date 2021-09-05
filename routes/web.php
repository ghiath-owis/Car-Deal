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

// auth client routes
Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');


// HomeController Routs
 Route::get('/home', 'HomeController@index')->name('home');


// PagesController Routs
Route::get('/','PagesController@index')->name('hom');
Route::get('/index','PagesController@index')->name('hom');
Route::get('/about_us','PagesController@about_us')->name('about-us');
Route::get('/change_password','PagesController@change_password')->name('change-password');

Route::get('/contact','PagesController@contact')->name('contact');
Route::get('/favourite_car','PagesController@favourite_products')->name('favourite-products');

Route::get('/privacy_policy','PagesController@privacy_policy')->name('privacy-policy');
Route::get('/product_listing','PagesController@product_listing')->name('product-listing');
Route::get('/special_offer','PagesController@special_offer')->name('special_offer');
Route::get('/product_listing_detail/{id}','PagesController@product_listing_detail')->name('product-listing-detail');

Route::get('/report_of_requests','PagesController@report_of_requests')->name('report_of_requests');

Route::get('/terms_and_conditions','PagesController@terms_and_conditions')->name('terms-and-conditions');
Route::get('/user_profile','PagesController@user_profile')->name('user-profile');

Route::get('/vehicle_rent','PagesController@vehicle_rent')->name('vehicle_rent');
Route::get('/vehicle_buy','PagesController@vehicle_buy')->name('vehicle_buy');
Route::post('/search','PagesController@search')->name('search');
Route::get('/special_rent','PagesController@special_rent')->name('special_rent');
Route::get('/special_buy','PagesController@special_buy')->name('special_buy');
Route::get('/add_favourite/{id}','PagesController@add_favourite')->name('add_favourite');

