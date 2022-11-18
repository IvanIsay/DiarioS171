<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;
use DB;
use Carbon\Carbon;


class controladorBD extends Controller
{

    public function index()
    {
        $resultRec= DB::table('tb_recuerdos')->get();

        return view('recuerdos', compact('resultRec'));
    }

    
    // Desplegar la vista formulario 
    public function create()
    {
        return view('ingresar');
    }

    // Procesa el insert de recuerdos

    public function store(validadorDiario $request)
    {
        DB::table('tb_recuerdos')->insert([
            "titulo"=> $request->input('txtTitulo'),
            "recuerdo"=> $request->input('txtRecuerdo'),
            "fecha"=> Carbon::now(),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]);
        
        return redirect('recuerdo/create')->with('confirmacion',"tu recuerdo se guardo");
    }



 
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
