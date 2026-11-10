<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

/*Route::get('/', function () {
    return 'Olá seja bem vindo ao meu site!';
});*/

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');