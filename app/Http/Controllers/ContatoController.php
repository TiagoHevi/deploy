<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*1° quando nos acessamos contato vai carregar view contato mas quando enviamos o formulario
o formulario e post logo esse formulario vai cair em salvar*/
class ContatoController extends Controller
{
    public function contato(Request $request){
       
        
       //var_dump($_POST);
       return view('site.contato');
    }
    /*nao consigo puxar todos os dados do request usando print_r acho que print_r nao suporta tants dados
    mas o print r suporta trazer um pouco de dados como metodo all que puxa o request do formulario
    ou seja traz todos os dados dos campos do fomulario 
    
    o method imput traz individulmente cada um dos campos */
     public function salvar(Request $request){

        //dd($request->all());





        
        /*esse e apenas um campo sendo possivel puxar todos pelo name faz sentido ja que usamos 
        tag input */
        //print_r($request->input('name'));

    }
}
