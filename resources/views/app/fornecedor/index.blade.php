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
    <br>
   Telefone: ({{ $fornecedores[1]['ddd'] ?? '' }}) {{ $fornecedores[1]['telefone'] ?? ''}}
   @switch($fornecedores[1]['ddd'])
    @case('11')
        São Paulo - SP
        @break
    @case('32')
        Juiz de Fora - MG
        @break
    @case('21')
        Rio de Janeiro - RJ
        @break
    @default
        Estado não identificado
   @endswitch
@endisset

