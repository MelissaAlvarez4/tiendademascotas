<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ColitasModelo;

class ColitasControlador extends Controller{

    public function index()
    {
        return view('portada');
    }

    public function listarPorNombre($nombre)
    {   
        $data['nombre'] = $nombre == "null" ? null : $nombre;
        return view('listadoNombre', $data);
    }

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