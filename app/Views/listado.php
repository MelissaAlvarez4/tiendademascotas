<?php function listarPorDato($data, $page){ ?>

<!-- Recorrido e insercion de los datos por nombre de animal -->
<div class="row m-5">
        <div class="col my-5">
            <div class="card shadow" style="width: 18rem;">
                <img 
                src="data:image/jpeg;base64,<?=$data['imagen']?>"
                class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$data['nombre']?></h5>
                    <p class="card-text">Protectora: <?=$data['protectora']?></p>
                    <p class="card-text">
                        Teléfono: <a href="#"><?=$data['telefono']?></a>
                    </p>
                </div>
            </div>
        </div>
</div>
<a class='btn btn-primary mx-5' href='../buscar/<?=$page?>'>Volver</a>

<?php } ?>

<?php function listarTodos($dataAll, $page){ ?>

<!-- Recorrido e insercion de todos los datos  -->
<div class="row m-5">
    <?php foreach($dataAll as $key=>$value){?>
        <div class="col my-5">
            <div class="card shadow" style="width: 18rem;">
                <img 
                src="data:image/jpeg;base64,<?=$dataAll[$key]['imagen']?>"
                class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$dataAll[$key]['nombre']?></h5>
                    <p class="card-text">Protectora: <?=$dataAll[$key]['protectora']?></p>
                    <p class="card-text">
                        Teléfono: <a href="#"><?=$dataAll[$key]['telefono']?></a>
                    </p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<a class='btn btn-primary mx-5' href='../buscar/<?=$page?>'>Volver</a>

<?php } ?>

<?php function mensajeError($page){
    
    $error = "<div class='container'>
    <p class='alert alert-danger'>Esta mascota no esta disponible.</p>
    <br>
    <a class='btn btn-primary' href='../buscar/".$page."'>Volver</a>
    </div>";

    return $error;
} ?>