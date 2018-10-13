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

Route::resource('skills', 'SkillController',
    ['only' => ['index', 'store', 'destroy']]);

//Route::get('skills', 'SkillController@index');
//Route::post('skills', 'SkillController@store');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
