<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller {

    public function listar() {
        return view('cursos');
    }
}
