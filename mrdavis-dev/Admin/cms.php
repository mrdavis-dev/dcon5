<?php
include("config/conexion.php");
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cms</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Animaciones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>

<body class="">
    <?php include('template/tem.php'); ?>
    <br><br>
    <div class="container">

        <!-- <p>Color de fondo</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Titulo">
        </div>
        <br> -->
        <?php
        include("post/logo.php");
        ?>
        <h4>Logo a mostrar</h4>
        <div>
            <form method="post" action="" enctype='multipart/form-data'>
                <input type='file' name='file' />
                <input class="btn btn-success" type='submit' value='Actualizar' name='but_upload'>
            </form>
        </div>

        <br>
        <?php
        include("post/name.php");
        ?>
        <h4 for="">Coloca el nombre que quieres mostrar a tus clientes</h4>
        <form action="" method="post" enctype='multipart/form-data'>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="titulo" placeholder="Titulo">
            </div>

            <input class="btn btn-success" name="sub" type="submit" value="Actualizar">
        </form>
        <br>

        <?php
        include("post/cate.php");
        ?>
        <h4>Tipos de consulta que ofreces</h4>
        <spam>ingrese las categorias necesarias "solo 4"</spam>
        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="cate1" placeholder="Categoria 1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="cate2" placeholder="Categoria 2">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="cate3" placeholder="Categoria 3">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="cate4" placeholder="Categoria 4">
            </div>
            <input class="btn btn-success" name="cate" type="submit" value="Actualizar">
        </form><br>


        <?php
        include("post/redes.php");
        ?>


        <h4>Redes sociales <a id="info" href="##"><img src="https://img.icons8.com/cotton/30/000000/info--v3.png" /></a></h4>
        <p>¡Si no cuentas con alguna de esas redes sociales solo rellena las que tienes!</p>
        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="red1" placeholder="Instagram:">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="red2" placeholder="Facebook:">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="red3" placeholder="Whatsapp">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="red4" placeholder="Telegram">
            </div>
            <input class="btn btn-success" name="btnred" type="submit" value="Actualizar">
        </form>
        <br>

        <script src="js/sweetalert.js"></script>
        <!-- <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" >
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" >
        </div> -->
    </div>


</body>

</html>