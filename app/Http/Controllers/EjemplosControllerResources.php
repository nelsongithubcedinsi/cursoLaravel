<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Resources\Ejemplo;
use Alert;


class EjemplosControllerResources extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public $manager;
    
     function __construct(){
        $this->manager = new Ejemplo();
     }


    public function index()
    {
       return view("ejemplos.index")->with("datos", $this->manager->listarEjemplos());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("ejemplos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->manager->guardarBd($request);  
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("ejemplos.show")->with("dato",$this->manager->buscarEjemplo($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $resultado = $this->manager->actualizarEjemplo($request,$id);  
        if ($resultado == 1){
            $mensaje = "Se pudo actualizar exitosamente!";   
            Alert::success($mensaje); 
        } else {
            $mensaje = "No se pudo actualizar...";
            Alert::error($mensaje);
        } 
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $resultado = $this->manager->actualizarEjemplo($request,$id);  
                
        if ($resultado == 1){
            $mensaje = "Se pudo actualizar exitosamente!";   
            Alert::success($mensaje); 
        } else {
            $mensaje = "No se pudo actualizar...";
            Alert::error($mensaje);
        } 
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resultado = $this->manager->eliminarEjemplo($id);  
                
        if ($resultado == 1){
            $mensaje = "Se pudo eliminar exitosamente!";   
            Alert::success($mensaje); 
        } else {
            $mensaje = "No se pudo eliminar el registro...";
            Alert::error($mensaje);
        } 
        return redirect()->back();
    }
}
