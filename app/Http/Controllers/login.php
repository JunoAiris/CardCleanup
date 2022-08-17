<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
  public function GateLogin(){
    return view('login');
  }
}
