<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinasController extends Controller {

    public function listar() {
        return view('disciplinas');
    }
}
