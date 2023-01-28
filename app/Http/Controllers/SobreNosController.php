<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Fornecedor;

class SobreNosController extends Controller
{

    public function sobreNos(){

      /*$fornecedorx = new Fornecedor();
      $fornecedorx->nome = "pedro";
      $fornecedorx->email = "pedro@gmail.com";
      $fornecedorx->uf = "MG";
      $fornecedorx->site = "www.motosdopedro.com.br";
      $fornecedorx->save();*/
      return view('site.sobre-nos');
    }
}
