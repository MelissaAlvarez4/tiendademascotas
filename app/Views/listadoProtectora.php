<!-- Inyecto la barra de navegacion -->
<?php include 'header.php'?>
<?php include 'listado.php'?>

<?php

if($mascotas != null){
    if($protectora){

        if(sizeof($mascotas) == 1){
            listarPorDato($mascotas, "protectora");
        }else{
            listarTodos($mascotas, "protectora");
        }
    }else{
        listarTodos($mascotas, "protectora");
    }
    
}else{
    echo mensajeError("protectora");
}


?>


<!-- Inyecto el pie de pagina -->
<?php include 'footer.php'?>