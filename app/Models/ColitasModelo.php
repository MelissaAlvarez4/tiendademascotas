<?php 
namespace App\Models;

use CodeIgniter\Model;

class ColitasModelo extends Model{
    protected $table      = 'fotos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'especie',
    'protectora',  'imagen', 'telefono'];

    public function getAll()
    {
        //Todos los animales
        $datos = $this->asArray()
        ->findAll();

        $newArrData = $this->encode($datos);

        return $newArrData;
    }

    public function getProtectora($protectora)
    {

        try{
            //Animales por protectora
            $datos = $this->asArray()
            ->where('protectora', $protectora)->findAll();

            //si hay más de una mascota por protectora devuelve la lista
            if(sizeof($datos) > 1){
                $newArrData = $this->encode($datos);

                return $newArrData;

            }else if(sizeof($datos) == 1){
                $datos['imagen'] = base64_encode($datos['imagen']);
            }

        }catch(ErrorException $e){
            $datos = null;
        }
        
        return $datos;
    }


    public function getEspecie($especie)
    {
        try{
            //Animales por especie
            $datos = $this->asArray()
            ->where('especie', $especie)->findAll();

            //si hay más de una mascota por especie devuelve la lista
            if(sizeof($datos) > 1){
                $newArrData = $this->encode($datos);
                
                return $newArrData;

            }else if(sizeof($datos) == 1){
                $datos['imagen'] = base64_encode($datos['imagen']);
            }

        }catch(ErrorException $e){
            $datos = null;
        }
        
        return $datos;
    }

    public function encode($datos){
        foreach($datos as $key=>$value){
            $newArrData[$key] =  $datos[$key];
            $newArrData[$key]['imagen'] = base64_encode($datos[$key]['imagen']);
        }

        return $newArrData;
    }
}