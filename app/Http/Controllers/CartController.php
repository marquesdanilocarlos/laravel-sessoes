<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list(Request $request)
    {
        //$data = $request->session()->get('product', 'Produto não encontrado.');
        $product = session('product', 'Produto não encontrado');
        $total = session('total', 'Nenhum valor no carrinho');
        dd($product, $total);
    }

    public function add(Request $request)
    {
        //$request->session()->put('product', 'Action Figure');
        session([
            'product' => 'Bola',
            'total' => 'R$ 123.00'
        ]);
        return "Adicionado com sucesso!";
    }

    public function remove(Request $request)
    {
        //$request->session()->forget(['product', 'total']);
        session()->forget(['product', 'total']);
        //session()->flush();

        return "Removido com sucesso";
    }
}
