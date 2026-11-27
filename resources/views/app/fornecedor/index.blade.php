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
 @for($i = 0; isset($fornecedores[$i]); $i++)
   Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
   CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não informado' }}
    <br>
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? ''}}
    <hr>
  @endfor  
@endisset

<br>

