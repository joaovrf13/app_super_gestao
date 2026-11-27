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
@php $i = 0 @endphp
 @while(isset($fornecedores[$i]))
   Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
   CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não informado' }}
    <br>
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? ''}}
    <hr>
    @php $i++ @endphp
@endwhile
@endisset

<br>

