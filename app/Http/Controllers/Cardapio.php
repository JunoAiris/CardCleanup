<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cardapio extends Controller
{
  public function GateCardapio(){
    return view('Cardapio');
  }
}
