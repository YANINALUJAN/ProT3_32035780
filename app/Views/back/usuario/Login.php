<?php
require "app\Config\Database.php";
$message = "";

if (!empty($_POST["usuario"]) && !empty($_POST["pass" ])) {
    $sql = "INSERT INTO usuario (usuario, pass) VALUES ( :usuario, :pass)";
    $stm = $conn->prepare($sql);
    $stm->bindParam(" :usuario", $_POST["usuario"]);
    $password = password_hash($_POST["pass" ], PASSWORD_BCRYPT);
    $stm->bindParam(" :pass", $pass);

    if ($stmt->execute()){
        $message = "Succssfully Created new user";
    } else {
        $message = "Sorry there must have been an issue creating your account";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!--Bootstrap-->
    <link href=assets/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        /* Estilo para el párrafo */
        p {
            color: black; /* Cambia el color del texto a negro */
        }

        /* Estilo para centrar el texto en el body */
        body {
            text-align: center;
        }

        /* Estilo para el header */
        header {
            background-color: green;
            color: white;
            padding: 20px 0;
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

        /* Estilo para la barra de navegación */
        .navbar {
            background-color: green; /* Fondo negro para la barra de navegación */
        }

        .navbar-nav .nav-link {
            color: white; /* Color de texto blanco para los enlaces */
        }

        .navbar-nav .nav-link:hover {
            color: #007bff; /* Color azul para los enlaces al pasar el ratón */
        }

        .navbar-toggler-icon {
            background-color: white; /* Icono del menú hamburguesa en blanco */
        }

        /* Estilo para el formulario de búsqueda */
        .navbar .form-control {
            border: 1px solid #007bff; /* Borde azul para el campo de búsqueda */
        }

        .navbar .btn-outline-success {
            border-color: #007bff; /* Borde azul para el botón de búsqueda */
            color: #007bff; /* Texto azul para el botón de búsqueda */
        }

        .navbar .btn-outline-success:hover {
            background-color: #007bff; /* Fondo azul al pasar el ratón */
            color: white; /* Texto blanco para el botón de búsqueda al pasar el ratón */
        }

        /* Estilo adicional para alinear el formulario de búsqueda a la derecha */
        .navbar-collapse {
            display: flex;
            justify-content: flex-end;
        }

        .navbar-nav {
            margin-right: auto; /* Alinea los elementos de navegación a la izquierda */
        }

        .navbar-collapse form {
            margin-left: auto; /* Alinea el formulario a la derecha */
        }
    </style>
     <!-- Enlace al archivo CSS externo -->
     <link rel="stylesheet" type="text/css" href="miestilo.css"></head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('index'); ?>">INICIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Puedes agregar más enlaces aquí si lo deseas -->
                </ul>
                <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
     <img src="assets\img\imagenPrueba.jpg" alt="Somos Formi Limpieza" class="logo">
        <nav>
            <ul>
                <!-- Enlaces a páginas externas -->
            </ul>
        </nav>
    </header>
    <nav>
        <ul>
            <li><a href="https://www.google.com">Google</a></li>
            <li><a href="https://www.yahoo.com">Yahoo</a></li>
            <li><a href="https://talentosdigitales.ar/">Talentos Digitales</a></li>
        </ul>
    </nav>
    <style>
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group button {
            background-color: #1fe60d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }
        /* Estilo específico para el botón de "Cancelar" */
        .form-group button.cancelar {
            background-color: #dc3545; /* Color rojo */
            color: #fff; /* Texto blanco */
        }
        /* Cambiar el color del texto del botón de "Cancelar" al pasar el mouse sobre él */
        .form-group button.cancelar:hover {
            background-color: #c82333; /* Color rojo más oscuro */
        }
    </style>
</head>
<body>
    <!-- Mensaje de Error -->
<?php if (session()->getFlashdata('msg')): ?>
    <div class="alert alert-warning">
        <?= session()->getFlashdata('msg') ?>
    </div>
<?php endif; ?>

    <!--INICIO DE FORMULARIO-->
    <form action="<?= base_url('enviarlogin'); ?>" method="post">
        <div class="form-group">
            <div style="text-align: center;">
                <p>INICIAR SESIÓN</p>
              </div>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>
        </div>
                <div class="form-group">
            <button type="submit">Iniciar Sesión</button>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger cancelar">Cancelar</button>
        </div>
    </form>
    <div class="footer-botton">
        <footer>
       ©Copyright 2024 by Empresa Formi. Todos los derechos reservados
     </footer>
</body>
</html>