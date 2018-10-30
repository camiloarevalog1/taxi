<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tarifaafiliacion;
use App\ubicacion;
use App\cliente;
use App\conductors;
use App\solicitud;
use App\asignacion;
class operadorController extends Controller
{
    
        public function inicioxml($id) {

                $sql = ubicacion::all();
                $cliente = cliente::find($id);
                $solicitud = solicitud::where('idCliente',$cliente->id)->orderBy('id', 'desc')->first();
                $conductores= conductors::all();
                return view('operador.inicio', ["sql" => $sql],["cliente" => $cliente])->with('conductores', $conductores)->with('solicitud', $solicitud);
        }

        
public function listadoTarifa(){

        $tarifas=tarifaafiliacion::all();
      
     
        return view('operador.tarifa',["tarifas"=>$tarifas]);
}



 public function listadoclientes()
    {
    
        $clientes=cliente::paginate(5);
     
        return view('operador.listar',["clientes"=>$clientes]);
    }




 public function asignacion(Request $request)
    {

 
     $respuesta = asignacion::create([
            'idSolicitud' => $request->input('solicitud'),
            'idConductor' => $request->input('conductor'),
            'idCliente' => $request->input('cliente'),
        ]);

//aca se crea el evento que avisa al conductor

  return view('operador.exito');

    }


 public function exito()
    {
        return view('operador.exito');
    }








}
