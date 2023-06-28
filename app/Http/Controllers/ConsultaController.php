<?php

namespace App\Http\Controllers;

use App\Models\Agendamentos;
use App\Models\Doutores;
use App\Models\Pacientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    function listarAgendamento()
    {
        $consultas = DB::table('consultas')
            ->join('doutores', 'consultas.id_doutor', '=', 'doutores.id')
            ->join('pacientes', 'consultas.id_paciente', '=', 'pacientes.id')
            ->select('consultas.*', 'doutores.nome AS nome_doutor', 'pacientes.nome AS nome_paciente')
            ->get();
        return view(
            'listarAgendamento',
            compact('consultas')
        );
    }

    function novo()
    {
        $agendamento = new Agendamentos();
        $agendamento->id = 0;

        $doutores = Doutores::orderBy('nome')->get();
        $pacientes = Pacientes::orderBy('nome')->get();

        return view('frmAgendamento', compact('agendamento', 'doutores', 'pacientes'));
    }

    function salvar(Request $request)
    {
        if ($request->input('id') == 0) {
            $agendamentos = new Agendamentos();
        } else {
            $agendamentos = Agendamentos::find($request->input('id'));
        }

        $agendamentos->id_paciente = $request->input("id_paciente");
        $agendamentos->data = $request->input("data");
        $agendamentos->id_doutor = $request->input("id_doutor");
        $agendamentos->descricao = $request->input("descricao");
        $agendamentos->horario = $request->input("horario");
        $agendamentos->save();

        return redirect('agendamento/listar');
    }

    function visualizar($id)
    {
        $consulta = DB::table('consultas')
            ->join('doutores', 'consultas.id_doutor', '=', 'doutores.id')
            ->join('pacientes', 'consultas.id_paciente', '=', 'pacientes.id')
            ->select('consultas.*', 'doutores.nome AS nome_doutor', 'pacientes.nome AS nome_paciente')
            ->where('consultas.id', $id)
            ->first();

        return view(
            'visualizarAgendamento',
            compact('consulta')
        );
    }

    function editar($id)
    {
        $agendamento = DB::table('consultas')
            ->join('doutores', 'consultas.id_doutor', '=', 'doutores.id')
            ->join('pacientes', 'consultas.id_paciente', '=', 'pacientes.id')
            ->select('consultas.*', 'doutores.nome AS nome_doutor', 'pacientes.nome AS nome_paciente')
            ->where('consultas.id', $id)
            ->first();

        $doutores = Doutores::orderBy('nome')->get();
        $pacientes = Pacientes::orderBy('nome')->get();

        return view(
            'frmAgendamento',
            compact('agendamento', 'doutores', 'pacientes')
        );
    }

    function excluir($id)
    {
        $consulta = Agendamentos::find($id);
        $consulta->delete();
        return redirect('agendamento/listar');
    }
}
