
<!-- Inyecto la barra de navegacion -->
<?php include 'header.php'?>
<?php include 'listado.php'?>

<?php
 
    if($error == false){
        if($nombre == true){
            listarPorDato($mascotas, "nombre");
        }else{
            listarTodos($mascotas, "nombre");
        }

    }else{
        echo mensajeError("nombre");
    }


?> 


<!-- Inyecto el pie de pagina -->
<?php include 'footer.php'?>