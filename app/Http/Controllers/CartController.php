<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list(Request $request)
    {
        //$data = $request->session()->get('product', 'Produto não encontrado.');
        //$product = session('product', 'Produto não encontrado');
        //$total = session('total', 'Nenhum valor no carrinho');

        $data = session()->all();

        dd($data);
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


        if (!session()->has('product')) {
           return 'Nenhum produto para remover';
        }

        //$request->session()->forget(['product', 'total']);
        session()->forget(['product', 'total']);
        //session()->flush();
        return "Removido com sucesso";
    }
}
