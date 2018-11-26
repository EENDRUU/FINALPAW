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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::group(['middleware' => 'jwt.auth'], function(){
	Route::get('auth/user', 'AuthController@user');
	Route::post('auth/logout', 'AuthController@logout');
});

Route::group(['middleware' => 'jwt.refresh'], function(){
	Route::get('auth/refresh', 'AuthController@refresh');
});

Route::get('/Lowongan/{namaLowongan}/{lokasi}', 'LowonganController@show');
Route::post('/Lowongan','LowonganController@store');
Route::get('/Lowongan/{id}', 'LowonganController@showDetail');
Route::get('/Lamaran/{namaPelamar}', 'LamaranController@show');
Route::get('/Lamaran/{id}/{namaLowongan}', 'LamaranController@showLowongan');
Route::delete('/Lamaran/{id}', 'LamaranController@destroy');
Route::post('/Lamaran','LamaranController@store');
Route::get('/Pelamar/{namaPelamar}', 'PelamarController@show');
Route::put('/Pelamar/{namaPelamar}', 'PelamarController@update');
Route::post('/Pelamar', 'PelamarController@store');

