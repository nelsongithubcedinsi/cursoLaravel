<?php

namespace App\Resources;
use App\Models\Ejemplo as EjemploModelo;

class Ejemplo
{
    public function ejemploDesdeElModelo(){
        dd("Hola mundo desde el modelo");
    }
 
    public function listarEjemplos()
    {   
        return EjemploModelo::all();
    }

    public function buscarEjemplo($id){
          return EjemploModelo::find($id);  // se canbio get por first  y el where("id",$id) por  find($id)
    }

    public function actualizarEjemplo($request, $id){
        return EjemploModelo::where("id",$id)->update([
            'nombre' => $request->nombre,
            'edad' => $request->edad,
            'tipo_documento' => $request->tipo_documento,
            'documento' => $request->documento
        ]);       
    }

    public function eliminarEjemplo($id){
        return EjemploModelo::where("id",$id)->delete();       
    }

    public function guardarBd($datos)
    {
      $ejemplo = EjemploModelo::create([
            'nombre' => $datos->nombre,
            'edad' => $datos->edad,
            'tipo_documento' => $datos->tipo_documento,
            'documento' => $datos->documento
        ]);
        //dd($ejemplo);
        return $ejemplo;
    }

}