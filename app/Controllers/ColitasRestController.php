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

        return $this->respond($this->map($newArrData));
    }

    public function show($nombre = null)
    {    
        //Animales por nombre
        $datos = $this->model->asArray()->where('nombre', $nombre)->first();
        $datos['imagen'] = base64_encode($datos['imagen']);

        return $this->respond($this->map1($datos));
    }


    public function map($data){

    $fotos = array();

    foreach ($data as $row){

    $foto = array(

            "id" => $row['id'],

            "nombre" => $row['nombre'],

            "especie" => $row['especie'],

            "protectora" => $row['protectora'],

            "imagen" => $row['imagen'],

            "telefono" => $row['telefono'],

            "url" => array("GET" => "http://localhost/DWES/adopcion-animales/public/buscar/todos")
            );

    array_push($fotos, $foto);

    }

    return $fotos;}

    public function map1($data){
    
        $foto = array(
    
                "id" => $data['id'],
    
                "nombre" => $data['nombre'],
    
                "especie" => $data['especie'],
    
                "protectora" => $data['protectora'],
    
                "imagen" => $data['imagen'],
    
                "telefono" => $data['telefono'],
    
                "url" => array("GET" => "http://localhost/DWES/adopcion-animales/public/buscar/todos/".$data['nombre'])
                );
    
        return $foto;}
 }