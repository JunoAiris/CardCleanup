<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditEstabelecimento extends Controller
{
  public function GateEditEstabelecimento(){
    return view('Edit_Estabelecimento');
  }
}
