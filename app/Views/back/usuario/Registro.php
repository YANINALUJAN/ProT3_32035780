<?php
/* require "app\Config\Database.php";
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
} */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" type="text/css" href="miestilo.css">
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
        /* Estilo para las imágenes */
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
    <script>
        function validarMayusculas(input) {
            var valor = input.value;
            var valorMayusculas = valor.toUpperCase();
            if (valor !== valorMayusculas) {
                input.value = valorMayusculas;
            }
        }
    </script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= base_url('index'); ?>" >INICIO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <img src="assets/img/imagenPrueba.jpg" alt="Somos Formi Limpieza" class="logo">

    <form action="<?= base_url('enviar-form');?>" method="post">
        <div class="form-group">
            <div style="text-align: center;">
                <p>REGISTRO DE USUARIOS</p>      
                <?php $validation = \Config\Services::validation(); ?>
                <?= csrf_field(); ?>
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>

                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
                <div class="form-group">
                    <label for="nombreyapellido">Nombre y Apellido:</label>
                    <input type="text" id="nombreyapellido" name="nombreyapellido" oninput="validarMayusculas(this)" required>
                    <!-- Error -->
                    <?php if ($validation->getError("nombreyapellido")) : ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError("nombreyapellido"); ?>
                        </div>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label for="cuit">Cuit/Cuil:</label>
                    <input type="text" id="cuit" name="cuit" required>
                    <!-- Error -->
                    <?php if ($validation->getError("cuit")) : ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError("cuit"); ?>
                        </div>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <!-- Error -->
                    <?php if ($validation->getError("email")) : ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError("email"); ?>
                        </div>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" required>
                    <!-- Error -->
                    <?php if ($validation->getError("usuario")) : ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError("usuario"); ?>
                        </div>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <label for="pass">Contraseña:</label>
                    <input type="password" id="pass" name="pass" required>
                    <!-- Error -->
                    <?php if ($validation->getError("pass")) : ?>
                        <div class="alert alert-danger mt-2">
                            <?= $validation->getError("pass"); ?>
                        </div>
                    <?php endif ?>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-danger cancelar" onclick="window.location.href='Index.php';">Cancelar</button>
                </div>
            </div>
        </div>
    </form>

    <footer>
        <p>© Copyright 2024 by Empresa Formi. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>