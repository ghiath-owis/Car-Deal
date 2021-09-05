<?php
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

### Auth routes for admin###
Route::group(['namespace'=>'Admin\Auth'], function () {
  Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'LoginController@login')->name('admin.login');
  Route::post('/logout', 'LoginController@logout')->name('admin.logout');
});

Route::group(['middleware' => 'auth:admin'], function () {
Route::get('/home','Admin\HomeController@index')->name('admin.home');





Route::get('/vehicle.add','vehiclesController@create')->name('add-vehicle');
Route::post('/vehicle/store','vehiclesController@store')->name('store-vehicle');
Route::get('/vehicle.all','vehiclesController@index')->name('all-vehicles');
Route::get('/vehicle.edit{id}','vehiclesController@edit')->name('edit-vehicle');
Route::post('/vehicle.update{id}','vehiclesController@update')->name('update-vehicle');
Route::get('/vehicle/delete/{id}','vehiclesController@destroy')->name('delete-vehicle');

});


