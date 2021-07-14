<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
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
    return view('auth/login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');


Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])
    ->name('login');


    Route::get('/Evento/creado', [EventoController::class, 'index'])
    ->name('Evento.index');

//ver calendario
Route::get('/Evento/creado/{mes}', [EventoController::class, 'index_month']);

//ver mes del calendario
Route::get('/Evento/creado/{month}', [EventoController::class, 'index_month']);

// ver formulario
Route::get('/Evento/form', [EventoController::class, 'form'])
    ->name('evento.crear');

//crear el evento
Route::get('/Evento/crear', [EventoController::class, 'create'])
    ->name('evento.crear');
Route::post('/Evento/crear', [EventoController::class, 'store'])
    ->name('evento.guardar');

// detalles del evento
Route::get('/Evento/details/{id}', [EventoController::class, 'details'])
    ->name('Evento.details');

//boton para atra
Route::get('/Evento/guardado', [EventoController::class, 'index'])
    ->name('evento.guardado');

