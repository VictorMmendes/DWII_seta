<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConceitosController extends Controller {

    public function listar() {
        return view('conceitos');
    }
}
