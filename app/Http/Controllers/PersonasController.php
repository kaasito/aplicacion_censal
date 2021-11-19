<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function crear(Request $req){

        $datos = $req->getContent();

        $datos = json_decode($datos);

        $persona = new Persona();
     
     $persona->nombre = $datos->nombre;
     $persona->primer_apellido = $datos->primer_apellido;
     $persona->segundo_apellido = $datos->segundo_apellido;
     $persona->fecha_nacimiento = $datos->fecha_nacimiento;
     $persona->domicilio = $datos->domicilio;
     $persona->padre = $datos->padre;

try{

$persona->save();

}catch(\Exception $e){
echo $e ->getMessage();

}
 die('vale');
    }
}
