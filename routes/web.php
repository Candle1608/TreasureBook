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
    return view('layouts.welcome');
})->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::resource('/employees', 'Admin\EmployeesController');
Route::resource('/customers', 'Admin\CustomersController');
});

Route::prefix('employee')->group(function(){
    Route::get('/login', 'Auth\EmployeeLoginController@showLoginForm')->name('employee.login');
    Route::post('/login', 'Auth\EmployeeLoginController@login')->name('employee.login.submit');
    Route::get('/', 'EmployeeController@index')->name('employee.dashboard');
    Route::resource('/manage_book', 'Employee\BooksController');   
});

//Route::get('admin/employees', 'EmployeesController@index')->name('employee_list');


