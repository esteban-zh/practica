<?php

use App\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/usuarios', 'UserController@mostrar')->name('usuarios.mostrar')->middleware('verified', Admin::class);
Route::get('/editar/{id}', 'UserController@editar')->name('usuarios.editar')->middleware('verified', Admin::class);
Route::patch('/actualizar/{id}', 'UserController@actualizar')->name('usuarios.actualizar')->middleware('verified', Admin::class);
