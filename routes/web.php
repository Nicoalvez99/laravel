<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('home');
});*/

//Otra forma de realizar las vistas y mejor es:
Route::view('/', 'home')->name('home');
//donde el primer parametro de view es la url y  el segundo es la vista, donde el name es home.
Route::view('/about', 'about')->name('about');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

Route::view('/contacto', 'contacto')->name('contacto');

Route::resource('proyectos', 'PortfolioController');

Route::post('contacto', 'MensajeController@store');

