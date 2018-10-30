<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taxi;
use App\conductors;
use App\cliente;
use App\operador;
use App\tarifaafiliacion;
use App\tarifa;
class administradorController extends Controller
{




//Metodos para agregar Conductor----------------------------------------------------------------------------------------------------------------


      public function listadoConductor()
    {
    
        $conductores=conductors::paginate(5);
     
        return view('Admin.conductor.listar',["conductores"=>$conductores]);
    }


    public function vistaAgregar(){

    $tarifa=tarifaafiliacion::all();

    return view('Admin.conductor.agregar',["tarifa"=>$tarifa]);

    }

     public function agregarConductor(Request $request)
    {

       
       $conductor=new conductors;
            $conductor->nombres = $request->input('nombre');
            $conductor->apellidos = $request->input('apellido');
            $conductor->telefono = $request->input('telefono');
            $conductor->email = $request->input('email');
            $conductor->password = bcrypt($request->input('password'));
            $conductor->RUT = $request->input('rut');
            $conductor->username = $request->input('username');
            $conductor->idAfiliacion = $request->input('idAfiliacion');
            $conductor->save();

        $password=$request->input('password');

  return view("Admin.conductor.exito",["respuesta"=>$conductor,"pas"=>$password]);



    }

  
 public function vista($id){
        $conductor = conductors::find($id); 

      return view("Admin.conductor.editar",["conductor"=>$conductor]);
    }


  public function update(Request $request, $id){

        $conductor = conductors::find($id);
        $conductor->nombres=$request->nombre;
        $conductor->apellidos=$request->apellido;
        $conductor->email=$request->email;
        $conductor->password=bcrypt($request->input('password'));
        $conductor->username=$request->username;
        $conductor->RUT=$request->rut;
     
        $conductor->save();
       

      return redirect('/listadoConductor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
       
        conductors::destroy($id);
        return redirect('/listadoConductor');
    }

//***************************************************metodos taxis**************************************************************

public function listadoTaxi(){
    
$taxis=taxi::all();
$conductores=conductors::all();    
return view('Admin.taxi.listar',["taxis"=>$taxis],["conductores"=>$conductores]);
}


public function vistaAgregarTaxi(){
    
$conductores=conductors::all();


return view('Admin.taxi.agregar',["conductores"=>$conductores]);
}

public function agregarTaxi(Request $request){


       
        $respuesta = taxi::create([
            'placa' => $request->input('placa'),
            'modelo' => $request->input('modelo'),
            'marca' => $request->input('marca'),
            'idConductor' => $request->input('conductor'),
           
        ]);

return view("Admin.taxi.exito",["respuesta"=>$respuesta]);



}

public function vistaTaxi($id){
   //$consulta =  producto_bodegas::where('idProducto', $idProducto)->where('idBodega',$idBodega)->first();
    $taxi = taxi::find($id); 
    $consulta = conductors::where('id',$taxi->idConductor)->first();
    $conductores=conductors::all();
    $con = $consulta->nombres;
   


    return view("Admin.taxi.edit",["taxi"=>$taxi],["conductores"=>$conductores])->with('con',$con);
}


public function editarTaxi(Request $request, $id){

        $taxi = taxi::find($id);
        $taxi->placa=$request->placa;
        $taxi->modelo=$request->modelo;
        $taxi->marca=$request->marca;
        $taxi->idConductor=$request->conductor;
      
        $taxi->save();
   

       return redirect('/listadoTaxi');
}

public function destroyTaxi($id){
       
        taxi::destroy($id);
        return redirect('/listadoTaxi');
}


//***************************************************metodos clientes********************************************

 public function listadoclientes()
    {
    
        $clientes=cliente::paginate(5);
     
        return view('Admin.cliente.listar',["clientes"=>$clientes]);
    }

//***************************************************metodos operador********************************************

public function listadooperador(){
    
        $operadores=operador::all();
     
        return view('Admin.operador.listar',["operadores"=>$operadores]);
}


public function vistaAgregarOperador(){
    

return view('Admin.operador.agregar');
}

public function agregarOperador(Request $request){




    $oper = new operador;
        $oper->email=$request->input('email');
        $oper->username=$request->input('username');
        $oper->password=bcrypt($request->input('password'));

      $password=$request->input('password');
        if ($oper->save()) {
        return view("Admin.operador.exito",["respuesta"=>$oper,"pas"=>$password]);
        }else{
             return view('auth.register');
        }








}


public function vistaOperador($id){
   //$consulta =  producto_bodegas::where('idProducto', $idProducto)->where('idBodega',$idBodega)->first();
    $operador = operador::find($id); 
   
    return view("Admin.operador.editar",["operador"=>$operador]);
}


public function editarOperador(Request $request, $id){

        $operador = operador::find($id);
        $operador->username=$request->username;
        $operador->email=$request->email;
        $operador->password=bcrypt($request->input('password'));
     
      
        $operador->save();
   
return redirect('/listadoOperador');
}


public function destroyOperador($id){
       
        operador::destroy($id);
        return redirect('/listadoOperador');
}


//***************************************************metodos tarifa********************************************

public function listadoTarifa(){

        $tarifas=tarifaafiliacion::all();
      
     
        return view('Admin.tarifa.listar',["tarifas"=>$tarifas]);
}

public function vistaAgregarTarifa(){
    

return view('Admin.tarifa.agregar');
}


public function agregarTarifa(Request $request){

        $respuesta = tarifaafiliacion::create([
            'valor' => $request->input('valor'),
            'descripcion' => $request->input('descripcion'),
      
           
        ]);
   

  return view("Admin.tarifa.exito",["respuesta"=>$respuesta]);



}

public function vistaTarifa($id){
   //$consulta =  producto_bodegas::where('idProducto', $idProducto)->where('idBodega',$idBodega)->first();
    $tarifa = tarifaafiliacion::find($id); 
   
    return view("Admin.tarifa.editar",["tarifa"=>$tarifa]);
}

public function editarTarifa(Request $request, $id){

        $tarifa = tarifaafiliacion::find($id);
        $tarifa->valor=$request->valor;
        $tarifa->descripcion=$request->descripcion;

        $tarifa->save();
   
return redirect('/listadoTarifa');
}


//***************************************************metodos tarifa KM********************************************


public function distancia(){

    return view("distancia");
}


}
