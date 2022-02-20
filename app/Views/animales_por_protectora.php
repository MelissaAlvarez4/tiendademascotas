<!-- Inyecto la barra de navegacion -->
<?php include 'header.php'?>

<body>
<a  href="../" class="mx-2">Inicio</a>
<form class="container">
  <h1 class="text-center">Busqueda por protectora</h1>
    <div class="my-lg-5">
      <label for="buscarProtectora" class="form-label">Protectora: </label>
      <input type="text" class="form-control" id="buscarProtectora" value="" >
    </div>

  <button type="button" class="btn btn-primary" 
    onclick="window.location.href = '../listadoProtectora/' 
    + (document.querySelector('#buscarProtectora').value == '' ? null : document.querySelector('#buscarProtectora').value)">
    Buscar
  </button>
</form>


<!-- Inyecto el pie de pagina -->
<?php include 'footer.php'?>