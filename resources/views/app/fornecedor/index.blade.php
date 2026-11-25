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
   Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
   CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não informado' }}
   <!-- 
        $variavel testada não estiver definida (isset)
        ou 
        $variavel testada possuir o valor null
    -->
@endisset

