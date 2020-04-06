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
Route::post('/loginAndroid', 'APIcontroller@loginAndroid');
Route::post('/register', 'APIcontroller@register');
Route::get('agenda','agendacontroller@index');
Route::post('tambahagenda','agendacontroller@create');
Route::get('hapusagenda','agendacontroller@delete');
Route::get('/mas','penukaran@index');