<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    function listarAgendamento() {
        return view(
            'listarAgendamento'
        );
    }
}
