<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MensajeController;
use App\Http\Controllers\ProjectController;
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


//Otra forma de realizar las vistas y mejor es:
Route::view('/', 'home')->name('home');
//donde el primer parametro de view es la url y  el segundo es la vista, donde el name es home.
Route::view('/about', 'about')->name('about');

Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portfolio/crear', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/portfolio', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/portfolio/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::get('/portfolio/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::patch('/portfolio/{id}', [ProjectController::class, 'update'])->name('projects.update');



Route::post('contacto', [MensajeController::class, 'store']);
Route::view('/contacto', 'contacto')->name('contacto');





