<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;


class ControladorVistas extends Controller
{
    



    public function procesarRecuerdo(validadorDiario $req){
            
        return redirect()->route('in')->with('confirmacion','Tu recuerdo llego al controlador');

    }








    public function showHome(){
        return view('home');
    }

    public function showIngresar(){
        return view('ingresar');
    }

    public function showRecuerdos(){
        return view('recuerdos');
    }






}
