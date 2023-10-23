<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list(Request $request)
    {
        //$data = $request->session()->get('product', 'Produto não encontrado.');
        $data = session('product', 'Produto não encontrado');
        dd($data);
    }

    public function add(Request $request)
    {
        //$request->session()->put('product', 'Action Figure');
        session([
            'product' => "Bola"
        ]);
        return "Adicionado com sucesso!";
    }
}
