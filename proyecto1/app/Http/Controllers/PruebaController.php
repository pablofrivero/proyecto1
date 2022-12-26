<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function Datos()
    {
        $datos=array(0,1,99);
        return view('Inicio')-> with('datos', $datos);
    }

    public function __invoke()
    {
         return "Hola";
    }






}
