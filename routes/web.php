<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('login');
});
*/
Auth::routes();
Route::get('/login', 'UserController@login')->name('login');
Route::post('/log', 'UserController@log')->name('log');
Route::get('/inicio', 'HomeController@homes')->name('home');
Route::get('/productos', 'ProductoController@index')->name('producto.index');
Route::get('/productos/consultar', 'ProductoController@consulta')->name('producto.consulta');
Route::post('/productos/registrar', 'ProductoController@registrar')->name('producto.save');
