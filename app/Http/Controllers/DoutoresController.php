<?php

namespace App\Http\Controllers;

use App\Models\Doutores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoutoresController extends Controller
{
  function listarDoutores()
  {
    $doutores = Doutores::orderBy('nome')->get();
    return view(
      'listarDoutores',
      compact('doutores')
    );
  }

  function novo()
  {
    $doutor = new Doutores();
    $doutor->id = 0;
    return view('frmDoutor', compact('doutor'));
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
    $doutores->save();
    return redirect('doutores/listar');
  }

  function editar($id)
  {
    $doutor = Doutores::find($id);
    return view(
      'frmDoutor',
      compact('doutor')
    );
  }

  function visualizar($id)
  {
    $doutor = Doutores::find($id);
    return view(
      'visualizarDoutor',
      compact('doutor')
    );
  }

  function excluir($id)
  {
    $doutores = Doutores::find($id);
    $doutores->delete();
    return redirect('doutores/listar');
  }
}
