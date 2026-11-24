<h3>Fornecedores</h3>

@php
    /* 
        if (isset($variavel)) {} // enquanto executa se o retorno for true se a variavel estiver definida
    */
@endphp

@isset($fornecedores)
   Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
         Cnpj: {{ $fornecedores[0]['cnpj'] }}
    @endisset
@endisset

