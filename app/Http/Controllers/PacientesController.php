<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PacientesController extends Controller
{
    function listarPacientes()
    {
        $pacientes = Pacientes::orderBy('nome')->get();
        return view(
            'listarPacientes',
            compact('pacientes')
        );
    }

    function novo()
    {
        $paciente = new Pacientes();
        $paciente->id = 0;
        return view('frmPaciente', compact('paciente'));
    }

    function salvar(Request $request)
    {
        if ($request->input('id') == 0) {
            $pacientes = new Pacientes();
        } else {
            $pacientes = Pacientes::find($request->input('id'));
        }

        if ($request->hasFile('arquivo')) {
            $arquivo = $request->file('arquivo');
            $arquivoSalvo = $arquivo->store('public/imagens');
            $arquivoSalvo = explode("/", $arquivoSalvo);
            $tamanho = count($arquivoSalvo);
            if ($pacientes->figura != "") {
                Storage::delete("public/imagens/$pacientes->figura");
            }
            $pacientes->figura = $arquivoSalvo[$tamanho - 1];
        }


        $pacientes->nome =
            $request->input('nome');
        $pacientes->cpf =
            $request->input('cpf');
        $pacientes->data_nascimento =
            $request->input('data_nascimento');
        $pacientes->save();
        return redirect('pacientes/listar');
    }

    function editar($id)
    {
        $paciente = Pacientes::find($id);
        return view(
            'frmPaciente',
            compact('paciente')
        );
    }

    function visualizar($id)
    {
        $paciente = Pacientes::find($id);
        return view(
            'visualizarPaciente',
            compact('paciente')
        );
    }

    function excluir($id)
    {
        $pacientes = Pacientes::find($id);
        $pacientes->delete();
        return redirect('pacientes/listar');
    }
}
