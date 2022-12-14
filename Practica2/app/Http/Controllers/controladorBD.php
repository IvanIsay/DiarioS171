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


  
    public function edit($id)
    {
        $consultaId= DB::table('tb_recuerdos')->where('idRecuerdo', $id)->first();

        return view('editar',compact('consultaId'));
    }

 
    public function update(validadorDiario $request, $id)
    {
        DB::table('tb_recuerdos')->where('idRecuerdo', $id)->update([
            "titulo"=> $request->input('txtTitulo'),
            "recuerdo"=> $request->input('txtRecuerdo'),
            "updated_at"=> Carbon::now(),
        ]);

        return redirect('recuerdo')->with('Actualizado',"xxxx");
    

        
    }


    public function show($id)
    {
        $consultaId= DB::table('tb_recuerdos')->where('idRecuerdo', $id)->first();

        return view('confirmar',compact('consultaId'));
    }


    public function destroy($id)
    {
        DB::table('tb_recuerdos')->where('idRecuerdo', $id)->delete();

        return redirect('recuerdo')->with('Eliminado',"abc");
    
    }
}
