<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientePedidos extends Controller
{
  public function GateClientePedidos(){
    return view('Cliente_Pedidos');
  }
}
