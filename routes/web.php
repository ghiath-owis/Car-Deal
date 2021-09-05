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
    return view('index');
});

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
Route::get('/shopping_cart','PagesController@shopping_cart')->name('shopping-cart');
Route::get('/sign_in','PagesController@sign_in')->name('sign-in');
Route::get('/sign_up','PagesController@sign_up')->name('sign-up');
Route::get('/terms_and_conditions','PagesController@terms_and_conditions')->name('terms-and-conditions');
Route::get('/user_profile','PagesController@user_profile')->name('user-profile');

Route::get('/vehicle_rent','PagesController@vehicle_rent')->name('vehicle_rent');
Route::get('/vehicle_buy','PagesController@vehicle_buy')->name('vehicle_buy');
Route::post('/search','PagesController@search')->name('search');
Route::get('/special_rent','PagesController@special_rent')->name('special_rent');
Route::get('/special_buy','PagesController@special_buy')->name('special_buy');
Route::get('/add_favourite/{id}','PagesController@add_favourite')->name('add_favourite');


//Route::resource('owners','OwnersController');
Route::get('/owner/add','OwnersController@add')->name('add-owner');
Route::post('/owner/store','OwnersController@store')->name('store-owner');
Route::get('/owner/all','OwnersController@all')->name('all-owners');
Route::get('/owner/edit/{id}','OwnersController@edit')->name('edit-owner');
Route::post('/owner/edit/{id}','OwnersController@update')->name('update-owner');
Route::get('/owner/delete/{id}','OwnersController@delete')->name('delete-owner');





// BrandController Routs

Route::get('/brand/add','BrandsController@create')->name('add-brand');
Route::post('/brand/store','BrandsController@store')->name('store-brand');
Route::get('/brand.all','BrandsController@index')->name('all-brands');
Route::get('/brand.edit{id}','BrandsController@edit')->name('edit-brand');
Route::post('/brand.update{id}','BrandsController@update')->name('update-brand');
Route::get('/brand/delete/{id}','BrandsController@destroy')->name('delete-brand');


// SpecialOfferController Routs

Route::get('/offer.add','SpecialOffersController@create')->name('add-special_offer');
Route::post('/offer/store','SpecialOffersController@store')->name('store-special_offer');
Route::get('/offer.all','SpecialOffersController@index')->name('all-special_offers');
Route::get('/offer.edit{id}','SpecialOffersController@edit')->name('edit-special_offer');
Route::post('/offer.update{id}','SpecialOffersController@update')->name('update-special_offer');
Route::get('/offer/delete/{id}','SpecialOffersController@destroy')->name('delete-special_offer');



// VehiclesController Routs

Route::get('/vehicle.add','vehiclesController@create')->name('add-vehicle');
Route::post('/vehicle/store','vehiclesController@store')->name('store-vehicle');
Route::get('/vehicle.all','vehiclesController@index')->name('all-vehicles');
Route::get('/vehicle.edit{id}','vehiclesController@edit')->name('edit-vehicle');
Route::post('/vehicle.update{id}','vehiclesController@update')->name('update-vehicle');
Route::get('/vehicle/delete/{id}','vehiclesController@destroy')->name('delete-vehicle');

// LogsController Routs

Route::get('/log.all','LogController@index')->name('all-logs');



// ContractRentsController Routs
Route::get('/rentContracts.all','ContractRentsController@index')->name('all-rents');




// RequestTablesController Routs
Route::get('/request','RequestsTableController@index')->name('all-request');


// ContractBuysController Routs
Route::get('/buyContracts.all','ContractBuysController@index')->name('all-buys');


// RequestTablesController Routs
Route::get('/buy/request/{id}','RequestsTableController@request_buy_create');
