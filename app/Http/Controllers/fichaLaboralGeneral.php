<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fichaLaboralGeneral extends Controller
{
    public function get()
    {
        return view('/admin.home');
        //return view('htmlStructure.main');
    }

    public function post()
    {
        //User::validarRut();
        $rut="";
        if(isset($_POST["txtRut"])){
            $rut = $_POST["txtRut"];
        }
    }
}
