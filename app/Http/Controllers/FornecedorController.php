<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status'=> 'N', 'cnpj' => '12.234.345/6789-01', 'ddd' => '11', 'telefone' => '99999-8888'],
            1 => ['nome' => 'Fornecedor 2', 'status'=> 'S', 'cnpj' => '00.000.000/0000-00', 'ddd' => '85', 'telefone' => '98888-7777'],
            2 => ['nome' => 'Fornecedor 3', 'status'=> 'S', 'cnpj' => '12.345.678/0001-90', 'ddd' => '32', 'telefone' => '97777-6666'],
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
