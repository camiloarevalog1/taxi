<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ubicacion;
use Auth;
use Route;
class conductorController extends Controller
{
    
        public function conductor(){
               
                return view('Conductor.agregar');
        }


        public function add(Request $request)
        { 


                    $user = Auth::guard('conductor')->user();

                    $consulta = ubicacion::where('idConductor',$user->id)->first(); 
                    if ($consulta==null) {
                    $conductor=new ubicacion;
                    $conductor->ubicacion = $user->nombres;
                    $conductor->latitud  =$request->input('lat');
                    $conductor->longitud  =$request->input('lon');
                    $conductor->type="taxi";
                    $conductor->idConductor=$user->id; 
                    $conductor->save();

                       
                    return redirect('/conductor');

                    
                    }else {

                        $conductor = ubicacion::where('id',$consulta->id)->first();
                        $conductor->latitud  =$request->input('lat');
                        $conductor->longitud  =$request->input('lon');
                        $conductor->save();
                    }

                 
                    
                    return redirect('/conductor');
    
    
        }








}
