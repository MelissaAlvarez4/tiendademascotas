
<!-- Inyecto la barra de navegacion -->
<?php include 'header.php'?>
<?php include 'listado.php'?>

<?php
    //Si no se envia nombre de animal se listan todos
    if($nombre != null){
        //Captura de errores de busqueda en la base de datos
        try{
            //Consumo de la API REST
            $datos = file_get_contents('http://localhost/DWES/adopcion-animales/public/buscar/todos/'.$nombre);
        }catch(ErrorException){
            $datos = null;
        }
        
        if($datos != null){ 
            // parseado de datos
            $dataNombre = json_decode($datos, true);
            listarPorDato($dataNombre, "nombre");
        }else{
            echo mensajeError("nombre");
        }

    }else{
        $dataAll = json_decode( file_get_contents('http://localhost/DWES/adopcion-animales/public/buscar/todos'), true );
        listarTodos($dataAll, "nombre");
    }

?> 


<!-- Inyecto el pie de pagina -->
<?php include 'footer.php'?>