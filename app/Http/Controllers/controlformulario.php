<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlformulario extends Controller
{
   public function ingresar(){
return view('ingresar');

   }
    public function mostrar(){
return view('mostrar');

   }


      public function ingresar2(Request $dato){
$nomb= $dato->nombre;
$ape= $dato->apellido;
$ced= $dato->cedula;
$pro= $dato->promedio;

$arreglo = array("$nomb","$ape","$ced","$pro");

return view('mostrar', compact('arreglo'));

   }
}
