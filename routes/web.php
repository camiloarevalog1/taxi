<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();


Route::get('/', function () {
    
    return view('index');
});

Route::get('/Admin', function () {
    return view('Admin.inicio');
});

//**************************************Rutas  admin conductor********************************************************

Route::get('/listadoConductor', 'administradorController@listadoConductor');
Route::get('/agregarConductor', 'administradorController@vistaAgregar');
Route::post('/agregar', 'administradorController@agregarConductor')->name('agregar');
Route::get('/editar/{id}', 'administradorController@vista');
Route::post('/edit/{id}', 'administradorController@update');
Route::get('/eliminar/{id}', 'administradorController@destroy');

//**************************************Rutas admin Taxis********************************************************

Route::get('/listadoTaxi', 'administradorController@listadoTaxi');
Route::get('/agregarTaxis', 'administradorController@vistaAgregarTaxi');
Route::post('/agregarTaxi', 'administradorController@agregarTaxi')->name('agregarTaxi');
Route::get('/editarTaxi/{id}', 'administradorController@vistaTaxi');
Route::post('/editTaxi/{id}', 'administradorController@editarTaxi');
Route::get('/eliminarTaxi/{id}', 'administradorController@destroyTaxi');

//**************************************Rutas admin clientes********************************************************

Route::get('/listadoClientes', 'administradorController@listadoclientes');


//**************************************Rutas admin operador********************************************************

Route::get('/listadoOperador', 'administradorController@listadooperador');
Route::get('/agregarOper', 'administradorController@vistaAgregarOperador');
Route::post('/agregarOperador', 'administradorController@agregarOperador')->name('agregarOperador');
Route::get('/editarOperador/{id}', 'administradorController@vistaOperador');
Route::post('/editOperador/{id}', 'administradorController@editarOperador');
Route::get('/eliminarOperador/{id}', 'administradorController@destroyOperador');


//**************************************Rutas admin tarifa********************************************************

Route::get('/listadoTarifa', 'administradorController@listadoTarifa');
Route::get('/agregarTar', 'administradorController@vistaAgregarTarifa');
Route::post('/agregarTarifa', 'administradorController@agregarTarifa')->name('agregarTarifa');
Route::get('/editarTarifaA/{id}', 'administradorController@vistaTarifa');
Route::post('/editarTarifa/{id}', 'administradorController@editarTarifa');



Route::get('/distancia', 'administradorController@distancia');



//*******************************************iniciar seccion*********************************

Route::post('/ingresar', 'Auth\ingresarController@ingresar')->name('ingresar');;
Route::post('/salirAdmin', 'Auth\ingresarController@logoutAdmin');





//*******************************************Registrar clientes*********************************
Route::post('/registrar', 'Auth\RegisterController@create');


//******************************************Opciones operador logueado ********************************************************************************


Route::get('/operador', function () {
    return view('operador.index');
});

Route::post('/salirOperador', 'Auth\ingresarController@logoutOperador');


Route::get('/asignar/{id}', 'operadorController@inicioxml');

Route::get('/listTarifa', 'operadorController@listadoTarifa');

Route::get('/solicitudes', 'operadorController@listadoTarifa');

Route::get('/listadoClients', 'operadorController@listadoclientes');

Route::post('/asignacion', 'operadorController@asignacion')->name('asignacion');;

Route::get('/exito', 'operadorController@exito');

//***************************************CLIENTE*****************************************

Route::get('/solicitar', 'clienteController@solicitar');
Route::post('/agregarSolicitud', 'clienteController@store')->name('agregarSolicitud');
Route::resource('cliente', 'clienteController', ['only' => ['index', 'destroy']]);
Route::get('/factura', 'clienteController@factura');
Route::get('/clienteIndex', function () {
    return view('Cliente.inicio');
});

Route::post('/salirCliente', 'Auth\ingresarController@logoutCliente');

//*****************conductor *********************************


Route::get('/conductor', 'conductorController@conductor');
Route::post('/addConductor', 'conductorController@add')->name('addConductor');

Route::post('/salirConductor', 'Auth\ingresarController@logoutConductor');








//opciones cliente ***************************************************************************************************************************

//Route::get('/cliente', 'clienteController@vista');

//Route::post('/solicitud', 'clienteController@solicitud')->name('solicitud');;





Route::get('/home', 'HomeController@index');


//*Route::post('/admins/login', 'Auth\AdminLoginController@login')->name('admins/login');**/


 

//*Route::get('/administrador', 'Auth\AdminLoginController@showLoginForm')->name('administrador');**/


