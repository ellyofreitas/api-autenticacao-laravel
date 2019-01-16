<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosControlador extends Controller
{
    public function index(){
        return response()->json([
            ['id'=>1, 'nome'=>'produto1'],
            ['id'=>2, 'nome'=>'produto2'],
            ['id'=>3, 'nome'=>'produto3'],
            ['id'=>4, 'nome'=>'produto4'],
        ]);
    }
}
