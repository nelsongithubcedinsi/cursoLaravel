<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/ejemplo","App\Http\Controllers\EjemplosController@saludo")->name("Saludo");
Route::get("/ejemplomodelo","App\Http\Controllers\EjemplosController@ejemploModelo");   /* ruta que utiliza un método de un objeto*/
Route::get("/vista","App\Http\Controllers\EjemplosController@retornaVista");
Route::get("/vista/{id?}","App\Http\Controllers\EjemplosController@verEjemplo");
Route::put("/edita/{id?}","App\Http\Controllers\EjemplosController@editaEjemplo");
Route::delete("/elimina/{id?}","App\Http\Controllers\EjemplosController@eliminaEjemplo");

Route::resource("ejemplos","App\Http\Controllers\EjemplosControllerResources" );

Route::get("/entrada","App\Http\Controllers\EjemplosController@entrada");
Route::get("/navegar","App\Http\Controllers\EjemplosController@navegar");

Route::post("/crear","App\Http\Controllers\EjemplosController@creaEjemplo");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
