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

Route::get('/','IndexController@index')->name('inicio');
Route::get('security/login', 'Security\LoginController@index')->name('login');
Route::post('security/login', 'Security\LoginController@login')->name('loginPost');
Route::get('security/logout', 'Security\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('usuario','UsuarioController@index')->name('usuario');
    Route::get('usuario/create','UsuarioController@create')->name('usuarioCreate');
    Route::get('','AdminController@index');

    Route::get('menu','MenuController@index')->name('menu');
    Route::get('menu/create','MenuController@create')->name('menuCreate');
    Route::post('menu','MenuController@store')->name('menuStore');
    Route::post('menu/saveOrden','MenuController@saveOrden')->name('saveOrden');
    Route::get('menu/{id}/edit','MenuController@edit')->name('menuEdit');
    Route::get('menu/{id}/destroy','MenuController@destroy')->name('menuDestroy');
    Route::put('menu/{id}','MenuController@update')->name('menuUpdate');

    Route::get('rol', 'RolController@index')->name('rol');
    Route::get('rol/create', 'RolController@create')->name('rolCreate');
    Route::post('rol', 'RolController@store')->name('rolStore');
    Route::get('rol/{id}/edit','RolController@edit')->name('rolEdit');
    Route::put('rol/{id}','RolController@update')->name('rolUpdate');
    Route::delete('rol/{id}/destroy','RolController@destroy')->name('rolDestroy');

    Route::get('menurol', 'MenuRolController@index')->name('menurol');
    Route::post('menurol', 'MenuRolController@store')->name('menurolStore');
});
