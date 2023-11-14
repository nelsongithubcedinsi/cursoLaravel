<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Resources\Ejemplo;
use Alert;

class EjemplosController extends Controller
{
    //
  
    public function entrada()
    {
        return view("entrada");
    }

    public function saludo(){
     dd("Hola mundo desde Pamplona");
    }

    public function navegar(){
        return view("ejemplo");
    }

    public function ejemploModelo (){
        $ejeModelo = new Ejemplo();  // este es un objeto desde la clase Ejemplo creada en la carpeta Resources      
        $ejeModelo->ejemploDesdeElModelo();
    }

    public function creaEjemplo(Request $request)
    {
       // dd($request->all());

        $ejeModelo = new Ejemplo();  // este es un objeto desde la clase Ejemplo creada en la carpeta Resources      
        $ejeModelo->guardarBd($request);  

        return redirect()->back();
    }   

    public function retornaVista (){
        $ejeModelo= new Ejemplo();
        return view("ejemplo")   /* Esta vista se encuentra en Ejemplo\resources\views y es la que está en el archivo ejemplo.blade.php */
        ->with("datos", $ejeModelo->listarEjemplos());
    }
    
    public function verEjemplo ($id){
       $ejeModelo= new Ejemplo();
       $dato = $ejeModelo->buscarEjemplo($id);
        return view("ver")->with("dato",$dato);
       //@dd($dato);
    }
        
    public function editaEjemplo(Request $request, $id)
    {
       // dd($request->all(), $id);

        $ejeModelo = new Ejemplo();  // este es un objeto desde la clase Ejemplo creada en la carpeta Resources      
        $resultado = $ejeModelo->actualizarEjemplo($request,$id);  
                
        if ($resultado == 1){
            $mensaje = "Se pudo actualizar exitosamente!";   
            Alert::success($mensaje); 
        } else {
            $mensaje = "No se pudo actualizar...";
            Alert::error($mensaje);
        } 
        return redirect()->back();

       //return view("ver")
       //->with("dato", $ejeModelo->buscarEjemplo($id));
       // ->with("mensaje",$mensaje);   se cambia esta línea por el paquete Alert
    }

    public function eliminaEjemplo($id)
    {
       // dd($request->all(), $id);

        $ejeModelo = new Ejemplo();  // este es un objeto desde la clase Ejemplo creada en la carpeta Resources      
        $resultado = $ejeModelo->eliminarEjemplo($id);  
                
        if ($resultado == 1){
            $mensaje = "Se pudo eliminar exitosamente!";   
            Alert::success($mensaje); 
        } else {
            $mensaje = "No se pudo eliminar el registro...";
            Alert::error($mensaje);
        } 
        return redirect()->back();

    }




    public function listar(){
        $ejeModelo = new Ejemplo();
        return view('index');
    }

}
