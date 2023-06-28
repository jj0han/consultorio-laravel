<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreasController extends Controller
{
    function listarAreas()
    {
        $areas = Areas::orderBy('nome')->get();
        return view(
            'listarAreas',
            compact('areas')
        );
    }

    function novo()
    {
        $area = new Areas();
        $area->id = 0;
        return view('frmArea', compact('area'));
    }

    function salvar(Request $request)
    {
        if ($request->input('id') == 0) {
            $areas = new Areas();
        } else {
            $areas = Areas::find($request->input('id'));
        }

        $areas->nome =
            $request->input('nome');
        $areas->save();
        return redirect('areas/listar');
    }

    function editar($id)
    {
        $area = Areas::find($id);
        return view(
            'frmArea',
            compact('area')
        );
    }

    function excluir($id)
    {
        try {
            $area = Areas::find($id);
            $area->delete();
            return redirect('areas/listar');
        } catch (Exception $e) {
            return redirect('areas/listar')->with('error', 'Esta Area está atrelada a um Doutor!');
        }
    }
}
