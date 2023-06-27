<?php

use App\Http\Controllers\AreasController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\DoutoresController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

// Rotas Agendamentos
Route::get('/agendamento/listar', [ConsultaController::class, 'listarAgendamento'])->middleware(['auth', 'verified'])->name('agendamento');
Route::get('/agendamento/novo', [ConsultaController::class, 'novo'])->middleware(['auth', 'verified'])->name('agendamento');
Route::post('/agendamento/salvar', [ConsultaController::class, 'salvar'])->middleware(['auth', 'verified'])->name('agendamento');
Route::get('/agendamento/pdf', [PdfController::class, 'gerarPdf'])->middleware(['auth', 'verified'])->name('agendamento');
Route::get('/agendamento/excluir/{id}', [ConsultaController::class, 'excluir'])->middleware(['auth', 'verified'])->name('agendamento');
Route::get('/agendamento/editar/{id}', [ConsultaController::class, 'editar'])->middleware(['auth', 'verified'])->name('agendamento');
Route::get('/agendamento/visualizar/{id}', [ConsultaController::class, 'visualizar'])->middleware(['auth', 'verified'])->name('agendamento');

// Rotas Doutores
Route::get('/doutores/listar', [DoutoresController::class, 'listarDoutores'])->middleware(['auth', 'verified'])->name('doutores');
Route::get('/doutores/novo', [DoutoresController::class, 'novo'])->middleware(['auth', 'verified'])->name('doutores');
Route::post('/doutor/salvar', [DoutoresController::class, 'salvar'])->middleware(['auth', 'verified'])->name('doutores');
Route::get('/doutores/excluir/{id}', [DoutoresController::class, 'excluir'])->middleware(['auth', 'verified'])->name('doutores');
Route::get('/doutores/editar/{id}', [DoutoresController::class, 'editar'])->middleware(['auth', 'verified'])->name('doutores');
Route::get('/doutores/visualizar/{id}', [DoutoresController::class, 'visualizar'])->middleware(['auth', 'verified'])->name('doutores');

// Rotas Pacientes
Route::get('/pacientes/listar', [PacientesController::class, 'listarPacientes'])->middleware(['auth', 'verified'])->name('pacientes');
Route::get('/pacientes/novo', [PacientesController::class, 'novo'])->middleware(['auth', 'verified'])->name('pacientes');
Route::post('/paciente/salvar', [PacientesController::class, 'salvar'])->middleware(['auth', 'verified'])->name('pacientes');
Route::get('/pacientes/excluir/{id}', [PacientesController::class, 'excluir'])->middleware(['auth', 'verified'])->name('pacientes');
Route::get('/pacientes/editar/{id}', [PacientesController::class, 'editar'])->middleware(['auth', 'verified'])->name('pacientes');
Route::get('/pacientes/visualizar/{id}', [PacientesController::class, 'visualizar'])->middleware(['auth', 'verified'])->name('pacientes');

// Rotas Areas
Route::get('/areas/listar', [AreasController::class, 'listarAreas'])->middleware(['auth', 'verified'])->name('areas');
Route::get('/areas/novo', [AreasController::class, 'novo'])->middleware(['auth', 'verified'])->name('areas');
Route::post('/area/salvar', [AreasController::class, 'salvar'])->middleware(['auth', 'verified'])->name('areas');
Route::get('/areas/excluir/{id}', [AreasController::class, 'excluir'])->middleware(['auth', 'verified'])->name('areas');
Route::get('/areas/editar/{id}', [AreasController::class, 'editar'])->middleware(['auth', 'verified'])->name('areas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
