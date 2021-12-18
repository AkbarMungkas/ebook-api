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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('authors', 'App\Http\Controllers\AuthorController@index');
Route::get('authors/{author}', 'App\Http\Controllers\AuthorController@show');
Route::post('authors', 'App\Http\Controllers\AuthorController@store');
Route::put('authors/{author}', 'App\Http\Controllers\AuthorController@update');
Route::delete('authors/{author}', 'App\Http\Controllers\AuthorController@delete');