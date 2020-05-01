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
    return view('welcome');
})->name('welcome.show');
Route::get('/website', function () {
    return view('website');
})->name('website.show');
Route::get('/edilson', function () {
    return 'Hola mundo';
});
Route::get('/producto/{nombre}', function($nombre){
    return "Mi nombre es: ".$nombre;
});
Route::get('/producto1/{a}/{b}', function($a,$b){
    $c=$a+$b;
    return "La suma es: ".$c;
});
Route::get('/producto2/{a}/{b?}', function($a,$b="Andrade"){
   
    return "Nombre: ".$a." ".$b;
});
Route::get('/producto3/{a}/{b}', function($a,$b){
    $c=$a+$b;

    return '<a href="{{url("website")}}">Edi</a>';
});
Route::get('/perfin/{nombre}', function ($nombre) {
    return view('perfin',compact('nombre'));
});
Route::get('/login', function(){
   
    return view('login');
})->name('Login.show');

Route::get('/formulario', 'Usuariocontroller@getFormulario');
Route::post('/register','Usuariocontroller@usuarioRegister')->name('usuario.register');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('usuarios','UsuarioController');











//coltrol + {
// Route::get('/nilda',function (){
//     return view('nilda');
// });
// Route::get('/mostrarNombre/{nombre}',function ($nombre){
//     return view('nilda',compact('nombre'));
// });
// Route::get('/listaPeriodico/{periodico}/{titulo}',function ($comentario,$titulo){
//     return view('periodico',compact('comentario','titulo'));
// });

// Route::get('/listaPeriodico/{periodico?}/{titulo}',function ($comentario,$titulo){
//     return view('periodico',compact('comentario','titulo'));
// });
// Route::post('/login/{nombre}/{contrasenia}',function ($nombre,$contrasenia){
//     return view('login',compact('nombre','contrasenia'));
// });
