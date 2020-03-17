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
});
Route::resource('/admin/employees', 'Admin\EmployeesController', ['as'=>'admin']);
Route::resource('/admin/customers', 'Admin\CustomersController', ['as'=>'admin']);
//Route::get('admin/employees', 'EmployeesController@index')->name('employee_list');

//Route::get('/employee', 'HomeController@index2')->name('home2');
