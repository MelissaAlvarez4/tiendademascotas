<!-- Inyecto la barra de navegacion -->
<?php include 'header.php'?>
<body>
<a  href="../" class="mx-2">Inicio</a>
<form class="container">
  <h1 class="text-center">Busqueda por nombre</h1>
    <div class="my-lg-5">
      <label for="buscarNombre" class="form-label">Nombre: </label>
      <input type="text" class="form-control" id="buscarNombre" value="" >
    </div>

  <button type="button" class="btn btn-primary" 
    onclick="window.location.href = '../listadoNombre/' 
    + (document.querySelector('#buscarNombre').value == '' ? null : document.querySelector('#buscarNombre').value)">
    Buscar
  </button>
</form>


<!-- Inyecto el pie de pagina -->
<?php include 'footer.php'?>