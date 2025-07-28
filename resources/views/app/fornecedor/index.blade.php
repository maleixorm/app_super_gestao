<h3>Fornecedor</h3>


@php 

@endphp

@isset($fornecedores)
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não informado' }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? 'Dado não informado' }} - {{ $fornecedores[$i]['telefone'] ?? 'Dado não informado' }}
        <hr>
    @endfor 
@endisset
