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

Route::group(['middleware' => 'auth:api'], function() {

    // User files
    Route::get('/files', 'FileController@index');
    Route::get('/files/{id}', 'FileController@getFile');
    Route::post('/files/{id}/note', 'FileController@updateNote');
    Route::post('/files/{id}/dangerous', 'FileController@updateDangerousState');
    Route::post('/files/{id}/underseek', 'FileController@updateUnderSeekState');
    Route::post('/files/{id}/image', 'FileController@updateImage');

    // Get all crimes
    Route::get('/crimes', 'CrimeController@index');

});