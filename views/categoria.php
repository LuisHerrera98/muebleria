<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>

  <!--ESTILOS DE BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!--MIS ESTILOS-->

  <link rel="stylesheet" href="../css/style.css">

  <!--JAVASCRIPT-->

  <script src="../js/masonry.min.js"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sensei muebles</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Muebles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tocadores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sillones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cajonera/Ropa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Placard/Ropa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mesadas/Bajomesadas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <h1 class="titleMain">Bienvenidos a nuestra muebleria</h1>
  <p class="subtitle">Donde podes comprar al contado o cuotas personales/credito</p>
  <br>
  <h2 class="categorias">nombre categoria</h1>
    <br>
  <div class="boxItems grid">
    <div class="item grid-item">
      <img src="../cajonera.jpeg" alt="">
      <a href="./views/categoria.php" class="btn btn-primary boton">Ver mas</a>
    </div>
    <div class="item grid-item">
      <img src="../mueble.jpeg" alt="">
      <a href="" class="btn btn-primary boton">Ver mas</a>
    </div>
    <div class="item grid-item">
      <img src="../placard.jpeg" alt="">
      <a href="" class="btn btn-primary boton">Ver mas</a>
    </div>
    <div class="item grid-item">
      <img src="../sillon.jpeg" alt="">
      <a href="" class="btn btn-primary boton">Ver mas</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

    <script src="../js/masonry.js"></script>
</body>

</html>