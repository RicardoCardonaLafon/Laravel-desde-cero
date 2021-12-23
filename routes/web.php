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

Route::get('/', 'MainController@MainController')->name('main');

Route::get('productos', 'Productos@mostrarTodo')->name('productos.mostrarTodo');

Route::get('productos/crear', 'Productos@formCrearProducto')->name('productos.formCrearProducto');

Route::post('productos', 'Productos@creaProducto')->name('productos.creaProducto');

Route::get('productos/{producto}', 'Productos@mostrarProducto')->name('productos.mostrarProducto');

Route::get('productos/{producto}/editarProducto', 'Productos@formEditarProducto')->name('productos.formEditarProducto');

Route::match(['put','patch'],'productos/{producto}', 'Productos@editar')->name('productos.editar');

Route::delete('productos/{producto}', 'Productos@eliminarProducto')->name('productos.eliminarProducto');