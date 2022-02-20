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
        //Animales por nombre
        $datos = $this->model->asArray()->where('nombre', $nombre)->first();
        $datos['imagen'] = base64_encode($datos['imagen']);

        return $this->respond($datos);
    }
}