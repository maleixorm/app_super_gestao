<h3>Fornecedor</h3>


@php 

@endphp


@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h4>Existem alguns fornecedores cadastrados</h4>
@elseif(count($fornecedores) > 10)
    <h4>Existem vários fornecedores cadastrados</h4>
@else
    <h4>Ainda não existem fornecedores cadastrados</h4>
@endif