<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pedidos extends Controller
{
  public function GatePedidos(){
    return view('Pedidos');
  }
}
