<?php

use App\Http\Controllers\ContactosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PortafolioController;
use App\Http\Livewire\AdmContactos;
use App\Http\Livewire\AdmPortafolio;
use App\Http\Livewire\FormContacto;

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
    return view('home');
})->name('home');

Route::get('contacto', FormContacto::class)->name('contactos.index');
Route::get('portafolio', [PortafolioController::class, 'index'])->name('portafolio.proyectos');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/adm_portafolio', AdmPortafolio::class)
->name('adm_portafolio');

Route::middleware(['auth:sanctum', 'verified'])->get('/adm_contactos', AdmContactos::class)
->name('adm_contactos');
