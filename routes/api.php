<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'Api\UserApiController@login');
    Route::post('signup', 'Api\UserApiController@signup');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'Api\UserApiController@logout');
        Route::get('user', 'Api\UserApiController@user');
    });
});

Route::get('/user/datatable', 'Api\UserApiController@index');
Route::post('/user/listuser', 'Api\UserApiController@userDatatable');
