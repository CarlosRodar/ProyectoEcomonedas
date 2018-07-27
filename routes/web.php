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
    return view('index');
})->name('pagina.principal');


Route::post('inicio','PostsController@iniciar')->name('inicio');

Route::post('registro','PostsController@registrar')->name('registro');

Route::get('mantUsuarios','PostsController@index')->name('usuarios.mantenimiento');

Route::get('DetalleUsuario/{id}','PostsController@show')->name('usuarios.detalle');


Route::get('crearUsuario','PostsController@crear')->name('usuarios.crear');

Route::post('crearUsuario','PostsController@create')->name('usuarios.crear');

Route::post('filtrado','PostsController@filtrado')->name('usuarios.filtro');


//Route::post('sesion', 'UsuarioController@inicio')->name('iniciar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
