<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
           0 => [
            'nome' => 'Fornecedor 1', 
           'status' => 'N', 
           'cnpj' => '12345678901234',],
           'ddd' => '11', //São Paulo
           'telefone' => '0000-0000',

           1 => [

            'nome' => 'Fornecedor 2', 
           'status' => 'S',
           'cnpj' => null,
           'ddd' => '21',
           'telefone' => '1111-1111',
           ],

           2 => [
            'nome' => 'Fornecedor 3', 
           'status' => 'S',
           'cnpj' => '98765432109876',
           'ddd' => '32',
           'telefone' => '2222-2222',
        ]
        ];


        /* 
            Condicao ? se verdade : se falso
            condicao ? se verdade : (condicao ? se verdade : se falso)
        
        */

       echo isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
