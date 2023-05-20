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

Route::resource('portfolio', ProjectController::class)->parameters(['portfolio' => 'project'])->names('projects');

//Route::resource lo que hace es simplificar todo lo que tengo aca abajo que tenga como igual la url la primera parte del name y el controlador, de esa manera la indico los parámetros a reemplazar y se simplifica todo.

/*Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portfolio/crear', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/portfolio', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/portfolio/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::get('/portfolio/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::patch('/portfolio/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('/portfolio/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');*/



Route::post('contacto', [MensajeController::class, 'store']);
Route::view('/contacto', 'contacto')->name('contacto');





