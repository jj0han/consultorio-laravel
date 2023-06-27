<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Doutores;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DoutoresController extends Controller
{
  function listarDoutores()
  {
    $doutores = DB::table('doutores')
      ->join('areas', 'areas.id', '=', 'doutores.id_area')
      ->select('doutores.*', 'doutores.id_area AS id_area', 'areas.nome AS nome_area')
      ->get();
    return view(
      'listarDoutores',
      compact('doutores')
    );
  }

  function novo()
  {
    $doutor = new Doutores();
    $doutor->id = 0;

    $areas = Areas::orderBy('nome')->get();

    return view('frmDoutor', compact('doutor', 'areas'));
  }

  function salvar(Request $request)
  {
    if ($request->input('id') == 0) {
      $doutores = new Doutores();
    } else {
      $doutores = Doutores::find($request->input('id'));
    }

    if ($request->hasFile('arquivo')) {
      $arquivo = $request->file('arquivo');
      $arquivoSalvo = $arquivo->store('public/imagens');
      $arquivoSalvo = explode("/", $arquivoSalvo);
      $tamanho = count($arquivoSalvo);
      if ($doutores->figura != "") {
        Storage::delete("public/imagens/$doutores->figura");
      }
      $doutores->figura = $arquivoSalvo[$tamanho - 1];
    }


    $doutores->nome =
      $request->input('nome');
    $doutores->cpf =
      $request->input('cpf');
    $doutores->id_area =
      $request->input('id_area');
    $doutores->save();
    return redirect('doutores/listar');
  }

  function editar($id)
  {
    $doutor = Doutores::find($id);
    $areas = Areas::all();
    return view(
      'frmDoutor',
      compact('doutor', 'areas')
    );
  }

  function visualizar($id)
  {
    $doutor = DB::table('doutores')
      ->join('areas', 'areas.id', '=', 'doutores.id_area')
      ->select('doutores.*', 'doutores.id_area AS id_area', 'areas.nome AS nome_area')
      ->where('doutores.id', $id)
      ->first();
    return view(
      'visualizarDoutor',
      compact('doutor')
    );
  }

  function excluir($id)
  {
    try {
      $doutores = Doutores::find($id);
      $doutores->delete();
      return redirect('doutores/listar');

    } catch (Exception $e) {
      return redirect('doutores/listar')->with('error', 'Este Doutor está atrelado a uma consulta!');
    }
  }
}
