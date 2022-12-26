<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function viewInicio(){
        $estados = array(0=>"ok",1=>"pending",99=>"nok");
        $estados2=array();
        $estados2[0]='OK';
        $estados2[1]='PENDING';
        $estados2[99]='NOK';
        $estados3= 'Lucas';
       return view('Inicio')-> with('estados',$estados) -> with('estados2',$estados2) -> with('estados3',$estados3);
       #return view('Inicio')->with('articleName', $estados3);
    }
}
