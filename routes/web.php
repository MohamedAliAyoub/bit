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
// Route::group(['middleware' => 'admin'], function() {
	Route::resource('employee'	, 'EmployeeController');
	Route::Get('salary/{id}/add'	, 'SalaryController@create');
	Route::post('salary', 'SalaryController@store')->name('salary.store');
	Route::get('sallary', 'SalaryController@index')->name('salary.index');
	Route::Get('bonus/{id}/edit'	, 'SalaryController@edit');
	Route::post('bonus/{id}'	, 'SalaryController@update')->name('bonuc.update');


// });
	Auth::routes();


	Route::get('/home', 'HomeController@index')->name('home');
