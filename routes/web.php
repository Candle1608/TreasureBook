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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'HomeController@index')->name('home');
Route::resource('/admin/employees', 'Admin\EmployeesController', ['as'=>'admin']);

Route::resource('/admin/customers', 'Admin\CustomersController', ['as'=>'admin']);
//Route::get('admin/employees', 'EmployeesController@index')->name('employee_list');
