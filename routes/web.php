<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');

Route::get('/portfolio', [ProjectController::class, 'index'])->middleware(['auth', 'verified'])->name('projects.index');
Route::get('/portfolio/crear', [ProjectController::class, 'create'])->middleware(['auth', 'verified'])->name('projects.create');
Route::post('/portfolio', [ProjectController::class, 'store'])->middleware(['auth', 'verified'])->name('projects.store');
Route::get('/portfolio/{project}/edit', [ProjectController::class, 'edit'])->middleware(['auth', 'verified'])->name('projects.edit');
Route::get('/portfolio/{id}', [ProjectController::class, 'show'])->middleware(['auth', 'verified'])->name('projects.show');
Route::patch('/portfolio/{project}', [ProjectController::class, 'update'])->middleware(['auth', 'verified'])->name('projects.update');
Route::delete('/portfolio/{project}', [ProjectController::class, 'destroy'])->middleware(['auth', 'verified'])->name('projects.destroy');

Route::post('contacto', [MensajeController::class, 'store']);
Route::view('/contacto', 'contacto')->name('contacto');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Min: 1:27
