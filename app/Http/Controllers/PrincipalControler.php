<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//esta estendendo a class controller que esta
//nesse diretorio desse arquivo

//as essas classes são conhecidas como controlador
class PrincipalControler extends Controller
{
    //os metodoss aqui são conhecidos como ection=açao
    public function principal(){
        //view e uma função do proprio laravl
        //se vc for no diretorio resource>view
        //vai ver que eu criei mais dois diretorios app site
        //essa funçção consegue ver o que esta dentro do
        //do diretorio view 
       
       return view('site.principal');
    }
}
