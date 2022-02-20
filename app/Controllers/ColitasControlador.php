<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ColitasModelo;

class ColitasControlador extends Controller{

    public function index()
    {
        return view('portada');
    }

    //////// CONSULTA CON API REST ////////
    public function listarPorNombre($nombre)
    {   
        $error = false;

         //Si no se envia nombre de animal se listan todos
        if($nombre != "null"){

            //Consumo de la API REST
            $datos = @file_get_contents('http://localhost/DWES/adopcion-animales/public/buscar/todos/'.$nombre);

            if($datos != false){ 
                // parseado de datos
                $dataNombre = json_decode($datos, true);
                $data['mascotas'] = $dataNombre;
                $data['nombre'] = true;
            }else{
                $error = true;
            }

        }else{
            $dataAll = json_decode( file_get_contents('http://localhost/DWES/adopcion-animales/public/buscar/todos'), true );
            $data['mascotas'] = $dataAll;
            $data['nombre'] = false;
        }

        $data['error'] = $error;

        return view('listadoNombre', $data);
    }


    /////// CONSULTA CON PDO MEDIANTE CODEIGNITER //////
    public function listarPorProtectora($protectora = null){

        $animalesModelo = new ColitasModelo();

        //Animales por protectora
        if($protectora != "null"){

            $datosModel = $animalesModelo->getProtectora($protectora);
            $data['mascotas'] = $datosModel;
            $data['protectora'] = true;

        }else{
            $data['mascotas'] = $animalesModelo->getAll();
            $data['protectora'] = false;
        }
        return view('listadoProtectora', $data);
    }


    ///////// CONSULTA SOAP //////////
    public function listarEspecie($especie = null)
    {

        $animalesModelo = new ColitasModelo();

        //Animales por especie
        if($especie != null){
            $datos['animalesEspecie'] = $animalesModelo->getEspecie($especie);
        }else{
            $datos['animalesEspecie'] = $animalesModelo->getAll();
        }   

    }

    public function buscarNombre()
    {
        return view('animales_por_nombre');
    }

    public function buscarProtectora()
    {    
        return view('animales_por_protectora');
    }


    public function buscarEspecie()
    {
        return view('animales_por_especie');
    }

}