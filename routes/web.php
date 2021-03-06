<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index');
Auth::routes();


Route::group(['middleware' => ['role:superadmin']], function () {
    Route::get('/superadmin', 'HomeController@IndexSuperAdmin')->name('superadmin');
    Route::get('/staff', 'SuperAdminController@listStaff')->name('staff');
    Route::get('/add_staff', 'SuperAdminController@addStaff')->name('add_staff');
    Route::get('/detail_staff', 'SuperAdminController@detailStaff')->name('detail_staff');
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', 'HomeController@IndexAdmin')->name('admin');
});

Route::group(['middleware' => ['role:spv_man_admin']], function () {
    Route::get('/spv', 'HomeController@IndexSpvManAdmin')->name('spv');
});

Route::group(['middleware' => ['role:head']], function () {
    Route::get('/head', 'HomeController@IndexHead')->name('head');
});

Route::group(['middleware' => ['role:employee']], function () {
    Route::get('/employee', 'HomeController@IndexEmployee')->name('employee');
});

Route::group(['middleware' => ['role:security']], function () {
    Route::get('/security', 'HomeController@IndexSecurity')->name('security');
});
