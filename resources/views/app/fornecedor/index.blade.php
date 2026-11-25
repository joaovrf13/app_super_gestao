<h3>Fornecedores</h3>

@php
    /* 
        if (empty($variavel)) {} //retorna true se a variável estiver vazia
        ''
        0
        0.0
        '0'
        null
        false
        array() (um array vazio)
        $variavel; (uma variável declarada, mas sem valor)
    */
@endphp

@isset($fornecedores)
   Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
         Cnpj: {{ $fornecedores[0]['cnpj'] }}
         @empty($fornecedores[0]['cnpj'])
           Vazio
        @endempty
    @endisset
@endisset

