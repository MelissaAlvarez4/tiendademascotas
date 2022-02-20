<!-- Inyecto la barra de navegacion -->
<?php include 'header.php'?>

<body>
<a  href="../" class="mx-2">Inicio</a>
<form class="container">
  <h1 class="text-center">Busqueda por especie</h1>
    <div class="my-lg-5">
      <label for="buscarEspecie" class="form-label">Esepecie: </label>
      <input type="text" class="form-control" id="buscarEspecie" value="" >
    </div>

  <button type="button" class="btn btn-primary" 
    onclick="window.location.href = '../listadoEspecie/' 
    + (document.querySelector('#buscarEspecie').value == '' ? null : document.querySelector('#buscarEspecie').value)">
    Buscar
  </button>
</form>


<!-- Inyecto el pie de pagina -->
<?php include 'footer.php'?>