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


Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
	Route::get('/dashboard', 'DashboardController@get')->name('dashboard');
	Route::get('/leadentry', 'LeadController@add')->name('leadadd');
	Route::get('/leadlist', 'LeadController@get')->name('leadlist');
	Route::post('/leadsave', 'LeadController@save')->name('leadsave');
	Route::get('/leadexport', 'LeadController@export')->name('leadexport');
	Route::get('/leadstatusupdate', 'LeadController@update_status')->name('leadupdsts');
	Route::get('/useradd', 'UserController@add')->name('useradd');
	Route::post('/usersave','UserController@save')->name('usersave');
	Route::post('/userupdate','UserController@update')->name('userupdate');
	Route::get('/userlist','UserController@get')->name('userlist');
	Route::get('/useredit','UserController@edit')->name('useredit');
	Route::get('/dashboard', 'DashboardController@get')->name('dashboard');
	Route::get('/leadentry', 'LeadController@add')->name('leadadd');
	Route::get('/leadlist', 'LeadController@get')->name('leadlist');
	Route::post('/leadsave', 'LeadController@save')->name('leadsave');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getques', 'LeadController@get_questions')->name('getques');
Route::get('/getcity', 'LeadController@get_cities')->name('getcity');
