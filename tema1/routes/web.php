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

Route::get('/about', 'AboutController@index');

Route::get('/employees', 'EmployeesController@show');
Route::post('/employees', 'EmployeesController@create');

Route::get('/employees/{employee_id}', 'EmployeesController@read');
Route::get('/employees/edit/{employee}', 'EmployeesController@edit');
Route::post('/employees/update/{employee}', 'EmployeesController@update');
Route::get('/employees/delete/{employee}', 'EmployeesController@destroy');

Route::get('/companies', 'CompaniesController@show');
Route::post('/companies', 'CompaniesController@create');

Route::get('/companies/{company_id}', 'CompaniesController@read');
Route::get('/companies/edit/{company}', 'CompaniesController@edit');
Route::post('/companies/update/{company}', 'CompaniesController@update');
Route::get('/companies/delete/{company}', 'CompaniesController@destroy');