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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ControllerContacto@index')->name('index');
Route::get('create/contact', 'ControllerContacto@create')->name('create');
Route::post('contacto/save', 'ControllerContacto@store')->name('store');
Route::get('edit/contacto/{id}', 'ControllerContacto@edit')->name('edit');
Route::post('contacto/update{id}', 'ControllerContacto@update')->name('update');
Route::get('/contacto/eliminar/{id}', 'ControllerContacto@delete')->name('eliminar');