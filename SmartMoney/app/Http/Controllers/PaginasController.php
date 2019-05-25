<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function exibirHome() {
        return view('home');
    }

    public function exibirSobre() {
        return view('sobre-nos');
    }

    public function exibirContato() {
        return view('contato');
    }

    public function exibirLogin() {
        return view('login');
    }
}
