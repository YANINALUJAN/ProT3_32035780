<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        /* Estilo para el párrafo */
        p {
            color: blue; /* Cambia el color del texto a azul */
        }

        /* Estilo para centrar el texto en el body */
        body {
            text-align: center;
        }

        /* Estilo para el header */
        header {
            background-color: pink;
            color: white;
            padding: 20px 0;
        }

        /* Asegurarse de que las imágenes del carrusel tengan el tamaño correcto */
        .carousel-inner img {
            width: 100%;
            height: auto;
        }

        /* Estilo para los enlaces del nav */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #007bff;
            /* Agregar sombreado al texto */
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Estilo para el footer */
        footer {
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        .destacado {
            font-weight: bold;
            color: #007bff;
        }
    </style>
    <link rel="stylesheet" href="miestilo.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="quienes_somos">Quienes somos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="acercade">Acerca de</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro">Registrarse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Autoridades
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="cards">Responsables</a></li>
                  <li><a class="dropdown-item" href="#"> Cronograma de la empresa</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Eventos
                  </a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <header>
        <div class="Container" style="background-color:rgba(25, 15, 209, 0.959);"div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                    <h1> Bienvenidos </h1>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1> Empresa Formi </h1> 
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>  Lideres de productos </h1>       
        </div>
<img src="assets\img\imagenPrueba.jpg" alt="imagenPrueba">
    </header>
    <nav> 
        <ul>
        <li> <a href="https://www.google.com/?hl=es ">Google</a> </li>
        <li> <a href="https://login.yahoo.com/ ">Yahoo</a> </li>
        <li> <a href=" https://talentosdigitales.ar/ ">Talentos Digitales</a> </li>
    </ul>
    </nav>
    <div class="container my-3">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h2>Formulario de Productos</h2>
                <form>
                    <div class="mb-3">
                        <label for="Nombre del Producto" class="form-label">Productos</label>
                        <input type="text" class="form-control" id="Nombre del Producto" placeholder="productos">
                      </div>
                      <div class="mb-3">
                        <label for="descripcion" class="form-label">descripcion</label>
                        <textarea class="form-control" id="descripcion" rows="3"></textarea>
                      </div>  
                      <div class="mb-3">
                        <label for="productos" class="form-label">numero de Productos</label>
                        <input type="number" class="form-control" id="Productos"/>
                      </div>
                      <div class="d-grid gap-2">
                      <button class="btn btn-success">Guardar</button>    
                      <button class="btn btn-light">limpiar</button>
                    </div> 
                     
                </form>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h2> Listados de Productos</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>productos</th>
                            <th>cantidad de productos de limpieza</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>lavandina</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>detergente</td>
                                <td>250</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>desodorante</td>
                                <td>350</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>difusores</td>
                                <td>450</td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>

        </div>
    
    <section>

    </section>
   <div class="div1">
    <p class="p1"> 
         </p>
         <p class="p1"> 
            LIDERES EN HIGIENE Y LIMPIEZA
         </p>
   </div>
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets\img\imagenPrueba1.jpg" class="d-block w-50" alt="imagenPrueba1">
      </div>
      <div class="carousel-item">
        <img src="assets\img\imagenPrueba2.jpg" class="d-block w-50" alt="imagenPrueba2">
      </div>
      <div class="carousel-item">
        <img src="assets\img\imagenPrueba3.jpg" class="d-block w-50" alt="imagenPrueba3">
      </div>
    </div>
  <div class="footer-botton">
   <footer>
  ©Copyright 2024 by Empresa Formi. Todos los derechos reservados
</footer>
<script src="assets/js/bootstrap.bundle.min.js"> </script>
</body>

</html>