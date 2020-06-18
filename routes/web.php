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

Route::group(['prefix' => 'admin', 'middleware' => ['check.admin']], function() {

    Route::get('login', 'Admin\UserController@loginPage');
    Route::post('login', 'Admin\UserController@login');

    Route::get('home', 'Admin\UserController@home');
    Route::get('/', 'Admin\UserController@home');
    Route::get('setting', 'Admin\UserController@passAdmin');
    Route::post('setting', 'Admin\UserController@passUpdate');
    Route::get('logout', 'Admin\UserController@logout');

    Route::get('company', 'Admin\CompanyController@index');
    Route::get('company/create', 'Admin\CompanyController@createPage');
    Route::post('company/create', 'Admin\CompanyController@create');
    Route::get('company/edit/{id}', 'Admin\CompanyController@edit');
    Route::post('company/edit/{id}', 'Admin\CompanyController@update');
    Route::get('company/remove/{id}', 'Admin\CompanyController@remove');
});

Route::group(['prefix' => 'company', 'middleware' => ['check.company']], function() {

    Route::get('login', 'Company\UserController@loginPage');
    Route::post('login', 'Company\UserController@login');
    Route::get('home', 'Company\UserController@home');
    Route::get('/', 'Company\UserController@home');
    Route::get('setting', 'Company\UserController@passAdmin');
    Route::post('setting', 'Company\UserController@passUpdate');
    Route::get('logout', 'Company\UserController@logout');
});
