<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{   
    public function index(){

        return view('clientes.todas.index');
    }
    public function sobrenosotros(){
    
        return view('sobrenosotros');
    }
}