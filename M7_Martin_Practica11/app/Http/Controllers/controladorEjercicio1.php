<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorEjercicio1 extends Controller
{
        public function ej1Parametro() {
            // return "Éste es el resultado del primer ejercicio de la práctica hecha por Martín";
            return view('primeraView') ->with(['text' => 'Éste es el resultado del primer ejercicio de la práctica hecha por Martín']);
        }

        public function vistaParametros($persona = '') {
            $texto = 'pruebas, ';
            $texto .= ($persona == '')?'no se donde va':$persona;
            return view('segundaView') ->with(['textos' => '  $texto']);
        }

       
      
}
