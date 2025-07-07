<h3>Fornecedor</h3>

{{ 'Texto de Teste' }}
<br>
<?= 'Texto de Teste<br>' ?>

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php
    // Para comentários de uma linha
    /*
        Para comentários
        em blocos.
    */
    echo 'Texto de Teste';
@endphp