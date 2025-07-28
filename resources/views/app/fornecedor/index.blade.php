<h3>Fornecedor</h3>


@php 

@endphp

@isset($fornecedores)
    @forelse ($fornecedores as $key => $fornecedor )
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não informado' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? 'Dado não informado' }} - {{ $fornecedor['telefone'] ?? 'Dado não informado' }}
        <br><br>
    @empty
        Não existem fornecedores cadastrados!    
    @endforelse
@endisset
