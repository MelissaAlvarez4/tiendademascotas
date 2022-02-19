<?php 
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ColitasModelo;

class ColitasRestController extends ResourceController{

    protected $modelName = 'App\Models\ColitasModelo';
    protected $format    = 'json';

    public function index()
    {   
        $datos = $this->model->findAll();

        foreach($datos as $key=>$value){
            $newArrData[$key] =  $datos[$key];
            $newArrData[$key]['imagen'] = base64_encode($datos[$key]['imagen']);
        }
        return $this->respond($newArrData);
    }

    public function show($nombre = null)
    { 
        $datos = $this->model->asArray()->where('nombre', $nombre)->first();
        $datos['imagen'] = base64_encode($datos['imagen']);
        
        return $this->respond($datos);
    }


    // public function buscarEspecie($especie = null)
    // {

    //     $animalesModelo = new ColitasModelo();

    //     //Animales por protectora
    //     if($protectora != null){
    //         $datos['animalesEspecie'] = $animalesModelo->getEspecie($especie);
    //     }else{
    //         $datos['animalesEspecie'] = $animalesModelo->getAll();
    //     }   

    // }

}