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

Route::get('/','IndexController@index');
Route::get('/admin/usuario','Admin\UsuarioController@index')->name('usuario');
Route::get('/admin/usuario/create','Admin\UsuarioController@create')->name('usuarioCreate');
Route::get('/admin/menu','Admin\MenuController@index')->name('menu');
Route::get('/admin/menu/create','Admin\MenuController@create')->name('menuCreate');
Route::post('/admin/menu','Admin\MenuController@store')->name('menuStore');