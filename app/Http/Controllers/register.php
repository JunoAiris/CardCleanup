<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
  public function GateRegister(){
    return view('register');
  }
}
