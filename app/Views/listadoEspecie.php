<!-- Inyecto la barra de navegacion -->
<?php include 'header.php'?>
<?php include 'listado.php'?>

<?php

if($mascotas != null){
    if($especie){

        if(sizeof($mascotas) == 1){
            listarPorDato($mascotas, "especie");
        }else{
            listarTodos($mascotas, "especie");
        }
    }else{
        listarTodos($mascotas, "especie");
    }
    
}else{
    echo mensajeError("especie");
}


?>


<!-- Inyecto el pie de pagina -->
<?php include 'footer.php'?>