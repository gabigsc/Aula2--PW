<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //Método Actions
    public function principal(){
         return view('site.contato');
         // echo 'controller contato';
    }
}
