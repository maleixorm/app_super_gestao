<h3>Fornecedor</h3>


@php 

@endphp


Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@unless($fornecedores[0]['status'] == 'S')
    <h5>Fornecedor inativo</h5>
@endunless