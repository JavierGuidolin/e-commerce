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
Route::post('/books/edit', 'ProductosController@edit');
Route::get('/books/all', 'ProductosController@all');
Route::post('/books/delete', 'ProductosController@delete');
Route::get('/books/edit/{id}', 'ProductosController@getBookById');

Route::get('/authors/all/{busqueda}', 'AuthorController@all');
Route::get('/categories/all', 'GenerosController@all');

Route::post('/admins/add', 'UserController@add');
Route::get('/admins/all', 'UserController@allAdmins');
Route::post('/admins/delete', 'UserController@delete');

Route::post('/authors/add', 'AuthorController@add');
Route::get('/authors/alls', 'AuthorController@alls');
Route::post('/authors/delete', 'AuthorController@delete');
Route::post('/authors/update', 'AuthorController@update');
Route::get('/authors/edit/{id}', 'AuthorController@getAuthorById');