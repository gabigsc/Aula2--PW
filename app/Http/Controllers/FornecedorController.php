<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //Método Actions
    public function index(){

        $fornecedores = ['Fornecedor 01'];

         return view('admin.fornecedores.index', compact('fornecedores'));
         // echo 'controller contato';
    }
}
