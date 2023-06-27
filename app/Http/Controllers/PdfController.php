<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function gerarPdf() {
        $consultas = DB::table('consultas')
            ->join('doutores', 'consultas.id_doutor', '=', 'doutores.id')
            ->join('pacientes', 'consultas.id_paciente', '=', 'pacientes.id')
            ->select('consultas.*', 'doutores.nome AS nome_doutor', 'pacientes.nome AS nome_paciente')
            ->get();

        $pdf = FacadePdf::loadView('visualizarPdf', compact('consultas'));
        return $pdf->stream();
    }
}
