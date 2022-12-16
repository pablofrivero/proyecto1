<?php

namespace App\Http\Controllers;

use DB;

class pruebaController extends Controller
{
    public function prueba(){
        $prueba=DB::select('select sysdate from dual');
        dd($prueba);

    }
}
