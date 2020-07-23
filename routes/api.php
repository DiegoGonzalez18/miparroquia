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


Route::get('/test', function(){
	echo "Esto es una simple prueba!!";
});

Route::post('/auth/login','TokensController@login');
//auth

Route::group(['middleware'=>['jwt.aut'],'prefix'=>'v1'], function(){

Route::post('/auth/refresh','TokensController@refreshToken');
Route::get('/auth/expire','TokensController@expireToken');

});