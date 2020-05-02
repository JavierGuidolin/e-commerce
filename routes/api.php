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

Route::post('/books/add', 'ProductosController@add');
Route::get('/authors/all/{busqueda}', 'AuthorController@all');
Route::get('/categories/all', 'GenerosController@all');
Route::get('/books/all', 'ProductosController@all');

Route::post('/books/delete', 'ProductosController@delete');
