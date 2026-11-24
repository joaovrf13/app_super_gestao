<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fonecedores = ['Fornecedor 1'];
        return view('app.fornecedor.index', compact('fonecedores'));
    }
}
