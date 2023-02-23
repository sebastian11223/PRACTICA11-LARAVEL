<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorEjercicio1 extends Controller
{
        public function ej1Parametro() {
            // return "Éste es el resultado del primer ejercicio de la práctica hecha por Martín";
            return view('primeraView') ->with(['text' => 'Éste es el resultado del primer ejercicio de la práctica hecha por Martín']);
        }

        public function vistaParametros($persona,$apellido,$edad,$localidad ) {
            return "Prueba esto es el persona: $persona apellido: $apellido edad: $edad localidad: $localidad";
        }

       
      
}
