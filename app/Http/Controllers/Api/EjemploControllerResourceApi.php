<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Resources\Ejemplo;


class EjemploControllerResourceApi extends Controller
{

    public $manager;
    function __construct(){
        $this->manager = new Ejemplo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*return "Hola Mundo desde la Api"; */
        return response()->json($this->manager->listarEjemplos());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   
        $registro = $this->manager->guardarBd($request);
        return response()->json($registro);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $dato = $this->manager->buscarEjemplo($id);
        return response()->json($dato);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $result = $this->manager->actualizarEjemplo($request,$id);
        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $resultado = $this->manager->eliminarEjemplo($id);
       return response()->json($resultado);
    }
}
