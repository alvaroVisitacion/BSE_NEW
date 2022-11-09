<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

 

Auth::routes(); 
Route::get('/home', 'HomeController@index')->name('home');

 

Route::get('cancelar',function(){
    return redirect()->route('administrativo.index')->with('datos','Accion Cancelada ...!');
})->name('cancelar');
 


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:admin-level')->group(function(){
Route::resource('/users', 'UsersController',['except'=>['show','create','store']]);
});
//Paginas publicas
Route::get('/p_servicios','ServiciosPublicController@mostrar_Servicios');
Route::get('/p_socios','SocioPublicController@mostrar_Socios');
Route::get('/p_formaciones','FormacionPublicController@mostrar_Formaciones');
Route::get('/p_productos','ProductoPublicController@mostrar_Productos');
Route::get('/p_eventos','EventoPublicController@mostrar_Eventos');
Route::get('/p_contactos','ContactoPublicController@mostrar_Contactos');
Route::GET('/p_correos','CorreoPublicController@create'); 
Route::get('p_servicios/{servicio}', 'ServiciosPublicController@comprar')->name('servicios.comprar');


Route::middleware('can:admin-level')->group(function(){ 
    Route::resource('socios','SocioController')->names('socios'); 
    Route::get('change_status/socio/{socio}', 'SocioController@change_status')->name('change.status.socios');
      
    Route::resource('formaciones','FormacionController')->names('formaciones'); 
    Route::get('change_status/formacion/{formacion}', 'FormacionController@change_status')->name('change.status.formaciones');
     
    Route::resource('servicios','ServicioController')->names('servicios'); 
    Route::get('change_status/servicio/{servicio}', 'ServicioController@change_status')->name('change.status.servicios');

     
    Route::resource('productos','ProductoController')->names('productos'); 
    Route::get('change_status/producto/{producto}', 'ProductoController@change_status')->name('change.status.productos');
     

    Route::resource('eventos','EventoController')->names('eventos'); 
    Route::get('change_status/evento/{evento}', 'EventoController@change_status')->name('change.status.eventos');
  
    //Modulo Informartivo   
    Route::resource('contactos','ContactoController')->names('contactos'); 
    Route::get('change_status/contacto/{contacto}', 'ContactoController@change_status')->name('change.status.contactos');
   
    Route::resource('correos','CorreoController')->names('correos'); 
    Route::get('change_status/correo/{correo}', 'CorreoController@change_status')->name('change.status.correos');
   
    Route::resource('datos','DatoController')->names('datos'); 
    Route::get('change_status/dato/{dato}', 'DatoController@change_status')->name('change.status.datos');
   
    Route::resource('experiencias','ExperienciaController')->names('experiencias'); 
    Route::get('change_status/experiencia/{experiencia}', 'ExperienciaController@change_status')->name('change.status.experiencias');
     

});
   