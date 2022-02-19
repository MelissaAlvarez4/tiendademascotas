<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
    <title>Document Title</title>
</head>
<nav class="navbar bg-info mb-5">
  <div class="container-fluid px-lg-5">
    <a class="navbar-brand" href="#">
      <img src="..\..\adopcion-animales\public\img\animales.png" alt="gatos" width="400" height="100" class="d-inline-block align-text-top">
    </a>
    <div class="text-light">
        <h2 class="pe-5">Colitas</h2>
        <p>Tu app de adopción de animales</p>
    </div>
  </div>
</nav>

<!-- Maquetacion pagina portada -->
<body>

    <div class="container">
        <div class="d-flex justify-content-center flex-wrap">
            <?php 

            $busquedas = array(
                "especie" => '..\..\adopcion-animales\public\img\especie.jpg' , 
                "nombre" => '..\..\adopcion-animales\public\img\nombre.jpg', 
                "protectora" => '..\..\adopcion-animales\public\img\protectora.jpeg'
            );

            foreach($busquedas as $busqueda => $ruta){ ?>

                <div class="card m-4" style="width: 22rem;">
                <img src="<?=$ruta?>" class="card-img-top" width="400" height="230"  alt="busquedaImg">
                <div class="card-body">
                    <h5 class="card-title">Ver animales por <?=$busqueda?></h5>
                    <hr>
                    <p class="card-text"> Desde aquí podras buscar por <b><?=$busqueda?></b> y ver todala información relacionada a los animales que tenemos para adoptar.</p>
                    <a href="./buscar/<?=$busqueda?>" class="btn btn-primary">Buscar por <?=$busqueda?></a>
                </div>
                </div>

            <?php } ?>
        </div>
    </div>
    

<!-- Inyecto el pie de pagina -->
<?php include 'footer.php'?>