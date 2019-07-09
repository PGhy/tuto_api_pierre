<?php

use Illuminate\Http\Request;

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

Route::resource('account', 'AccountController');
Route::resource('immeuble', 'ImmeubleController');
Route::resource('user', 'UserController');

Route::post('/immeuble/{id}/account/{account_id}/attach', 'ImmeubleController@atta');

Route::post('/account/{id}/user', 'UserController@store');
Route::get('/user/{id}/account', 'UserController@show_account');
Route::get('/user/{id}/account/immeuble', 'UserController@show_account_immeuble');