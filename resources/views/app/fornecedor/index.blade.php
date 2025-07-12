<h3>Fornecedor</h3>


@php 

@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[2]['nome'] }}
    <br>
    Status: {{ $fornecedores[2]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[2]['cnpj'] ?? 'Dado não informado' }}
    <br>
    Telefone: {{ $fornecedores[2]['ddd'] ?? 'Dado não informado' }} - {{ $fornecedores[2]['telefone'] ?? 'Dado não informado' }}
    <br>
    Cidade: 
    @switch($fornecedores[2]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @default
            Estado não informado
    @endswitch
@endisset
