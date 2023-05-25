<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoutoresController extends Controller
{
    function listarDoutores() {
        return view(
            'listarDoutores'
        );
    }
}
