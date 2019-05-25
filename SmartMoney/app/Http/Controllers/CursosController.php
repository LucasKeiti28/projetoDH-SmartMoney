<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function exibirCursos() {
        return view('cursos');
    }

    public function exibirCurso() {
        return view('curso');
    }
}
