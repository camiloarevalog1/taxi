<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Route;

class ingresarController extends Controller
{
   
    public function __construct()
    {
     // $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    
   


public function ingresar(Request $request){

$tipo =  $request->input('tipo');


if ($tipo=="1") {

 if (Auth::guard('cliente')->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
        // if successful, then redirect to their intended location
     //  dd(Auth::guard('admin')->user());
        return redirect('/clienteIndex');
    }

  return view('auth.login')->withInput($request->only('email', 'remember'));



}

else if($tipo=="2"){
  if (Auth::guard('operador')->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
        // if successful, then redirect to their intended location
     //  dd(Auth::guard('admin')->user());
       return redirect('/operador');
    }

  return view('auth.login')->withInput($request->only('email', 'remember'));


}

else if($tipo=="3"){
if (Auth::guard('conductor')->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
        // if successful, then redirect to their intended location
     //  dd(Auth::guard('admin')->user());
       return redirect('/conductor');
    }

  return view('auth.login')->withInput($request->only('email', 'remember'));


}







else if($tipo=="4"){
 
 if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
        // if successful, then redirect to their intended location
     //  dd(Auth::guard('admin')->user());
 
        return view('Admin.inicio');
    }

  return view('auth.login')->withInput($request->only('email', 'remember'));

}




      // Validate the form data
      /**$this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:2'
      ]);**/
  
}

public function logoutAdmin()
    {
   
        Auth::guard('admin')->logout();
        
        return redirect('/');
    }



public function logoutOperador()
    {
   
        Auth::guard('operador')->logout();
        
        return redirect('/');
    }


public function logoutCliente()
    {
   
        Auth::guard('cliente')->logout();
        
        return redirect('/');
    }

public function logoutConductor()
    {
   
        Auth::guard('conductor')->logout();
        
        return redirect('/');
    }



}