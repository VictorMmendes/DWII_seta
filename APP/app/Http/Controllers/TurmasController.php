<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurmasController extends Controller {

    public function listar() {
        return view('turmas');
    }
}
