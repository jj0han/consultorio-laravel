<?php

use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\DoutoresController;
use App\Http\Controllers\PacientesController;
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
    return view('index');
});

Route::get('/agendamento/listar', [ConsultaController::class, 'listarAgendamento']);

Route::get('/doutores/listar', [DoutoresController::class, 'listarDoutores']);
Route::get('/doutores/novo', [DoutoresController::class, 'novo']);
Route::post('/doutor/salvar', [DoutoresController::class, 'salvar']);
Route::get('/doutores/excluir/{id}', [DoutoresController::class, 'excluir']);
Route::get('/doutores/editar/{id}', [DoutoresController::class, 'editar']);
Route::get('/doutores/visualizar/{id}', [DoutoresController::class, 'visualizar']);

Route::get('/pacientes/listar', [PacientesController::class, 'listarPacientes']);
require __DIR__.'/auth.php';
