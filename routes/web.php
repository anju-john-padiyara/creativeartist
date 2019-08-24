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

Route::group(['namespace' => 'User'], function(){
	Route::get('/', 'HomeController@index');
	Route::get('/about', 'HomeController@about');
	Route::get('/contact', 'HomeController@contact');
	Route::post('/contact', 'HomeController@contactInput');
	Route::get('/project', 'HomeController@project');
	Route::get('/project/{project}', 'HomeController@project')->name('project');
});
Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function(){
	Route::resource('admin/project', 'ProjectController');
	Route::get('admin/message', 'ContactController@index');
});

Route::group(['namespace' => 'Admin'], function(){

	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');

	Route::post('admin-login', 'Auth\LoginController@login');

    Route::post('admin-logout', 'Auth\LoginController@logout')->name('admin.logout');
});

Auth::routes();
