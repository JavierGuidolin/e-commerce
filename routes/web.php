<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos','ProductosController@verProductos');
Route::get('/productos/{id}','ProductosController@detalleProducto');
Route::get('/categorias','GenerosController@verGeneros');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/inicio',function(){return view('index');});
Route::get('/contacto',function(){return view('contacto');});
Route::get('/FAQ',function(){return view('faq');});
Route::get('/userAccount',function(){return view('userAccount');});
Route::get('/cart',function(){return view('cart');});
