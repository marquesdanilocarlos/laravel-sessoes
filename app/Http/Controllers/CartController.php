<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list(Request $request)
    {
        $data = $request->session()->get('product', 'Produto não encontrado.');

        dd($data);
    }

    public function add(Request $request)
    {
        $request->session()->put('product', 'Action Figure');
        return "Adicionado com sucesso!";
    }
}
