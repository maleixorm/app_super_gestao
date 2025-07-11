<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status'=> 'N'],
            1 => ['nome' => 'Fornecedor 2', 'status'=> 'S', 'cnpj' => '00.000.000/0000-00'],
        ];
        echo isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
