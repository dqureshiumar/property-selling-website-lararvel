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

Route::get('/', 'DemoController@prop');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::resource('verify-property','VerifyPropController');
	Route::resource('not-verify-property','NotVerifyPropController');
	Route::get('my-property','DemoController@myproperty')->name('myproperty');
	Route::post('paywithpaypal','PaymentController@payWithpaypal')->name('paywithpaypal');
	Route::get('status','PaymentController@getPaymentStatus')->name('status');
	Route::resource('/submit-property','PorpertyController');
	Route::get('verify/{id}','NotVerifyPropController@verify')->name('verify');
	Route::get('sold/{id}','VerifyPropController@sold')->name('sold');
	Route::get('rent/{id}','VerifyPropController@rent')->name('rent');
	Route::get('all','DemoController@all')->name('all');
});
Route::get('/redirect', 'GoogleLoginController@redirectToGoogle');
Route::get('/callback', 'GoogleLoginController@handleGoogleCallback');
Route::any('/all-properties', 'DemoController@allprops')->name('all-properties');
//Payment Routes
Route::get('/pay/{id}', 'DemoController@pay')->name('pay');
Route::get('/pay-success/{id}', 'DemoController@success')->name('pay-success');





