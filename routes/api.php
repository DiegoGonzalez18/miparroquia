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



/*inicio ruta para el login*/
Route::post('/auth/login','TokensController@login');
Route::post('/horario','HorarioEstandarController@store');
/*fin ruta para el login*/




/*inicio de rutas que solicitan autentificación para seguir con el request*/

Route::group(['middleware'=>['jwt.verify'],'prefix'=>'v1'], function(){

			Route::post('/auth/refresh','TokensController@refreshToken');
			Route::get('/auth/logout','TokensController@logout');
			Route::get('/test', function(){
				echo "Esto es una simple prueba!!";
			});
});

/*

Fin de rutas que solicitan autentificación para seguir con el request

*/