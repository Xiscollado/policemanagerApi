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
    Route::get('/user', function (Request $request) {
        return $request->user()->load('admin');
    });

    // Get all crimes
    Route::get('/crimes', 'CrimeController@index');
    Route::post('/crimes', 'CrimeController@createCrime');
    Route::post('/crimes/{id}', 'CrimeController@updateCrime');
    Route::delete('/crimes/{id}', 'CrimeController@deleteCrime');
    Route::get('/titles', 'TitleController@index');
    Route::post('/titles', 'TitleController@createTitle');
    Route::post('/titles/{id}', 'TitleController@updateTitle');
    Route::delete('/titles/{id}', 'TitleController@deleteTitle');

});