<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriarProdutos extends Controller
{
  public function GateCriarProdutos(){
    return view('Criar_Produtos');
  }
}
