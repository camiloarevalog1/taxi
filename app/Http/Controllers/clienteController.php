<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\solicitud;
use App\tarifa;
use Auth;
use Route;
use App\Events\StatusLiked;
class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::guard('cliente')->user();


        $solicitud=solicitud::where('idCliente',$user->id)->get();

       

        return view('Cliente.listar',['solicitud'=>$solicitud]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function solicitar()
    {
         $solicitud=new solicitud;
        return view('Cliente.agregar',['solicitud'=>$solicitud]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        $user = Auth::guard('cliente')->user();



		$solicitud=new solicitud;
		$solicitud->ubicacion = $request->input('origin');
		$solicitud->idCliente = $user->id;
		$solicitud->destino = $request->input('destination');
		$solicitud->precio  =$request->input('f1t1');
		
		$solicitud->save();

        event(new StatusLiked($user->name,$user->id));


		
        return view("Cliente.exito",["respuesta"=>$solicitud]);


    }

    public function factura(){

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        solicitud::destroy($id);
        return redirect('/cliente');
    }
}
