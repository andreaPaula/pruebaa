<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|post,get,put,delete
*/

Route::get('/', function()
{
    return view('index');
});
Route::resource('usuario','UsuarioController');

/*
Route::controller('prues', 'pruebaController'[
    'getShow' => 'prueba.show',
]);
Route::controller('users', 'UserController', [
    'getShow' => 'user.show',
]);
Route::get('prueba',function(){
	return 'hola desde rutas.php';
});
Route::get('nombre/{nombre}',function($nombre){
 	return 'hola mi nombre es '.$nombre;
});
Route::get('nombre2/{nombre?}',function($nombre='andrea'){
   return 'mi segundo nombre es: '.$nombre;
});
Route::match(['get','post'],'nombres/',function(){
 return 'hello amiguis paula andrea';
});
//rutas con expresiones regulares

Route::get('usuario/{name}',function($name){
return 'hola'.$name;
})->where('name','[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    //
})
->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
   return 'hola '.$name.' id '.$id;
})
->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

Route::get('user/profile', ['as' => 'profile', function () {
    return 'rutas con url';
}]);

Route::get('/', function () {
    return view('welcome');
});*/
