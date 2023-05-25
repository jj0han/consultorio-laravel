<?php

use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\DoutoresController;
use App\Http\Controllers\PacientesController;
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
Route::get('/pacientes/listar', [PacientesController::class, 'listarPacientes']);