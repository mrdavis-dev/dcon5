<?php
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
  <title>Tablero</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Ubuntu&display=swap" rel="stylesheet">
  <!-- Animaciones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>
<script></script>

<body style="">
  <header class="font1">
    <?php
    include('template/tem.php')
    ?>

    <div class="container-fluid animate__animated animate__fadeIn ">
      <div class="container text-center border-bottom pt-3 pb-2 mt-2">
        <h3 class="font-weight-bold" style="font-size: calc(10px + 4.0vw);">Dashboard</h3>
      </div>
    </div>
  </header>

  <br>
  <div class="container mt-4 font2 animate__animated animate__fadeIn">
    <div class="row">
      <div class="col-sm">
        <br />
        <h2 align="center">Citas agendadas</h2><br />
        <div class="form-group">
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInputGroup"></label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Buscar</div>
              </div>
              <input type="text" class="form-control" name="search_text" id="search_text" placeholder="">
            </div>
          </div>
          <!-- <div class="input-group">
            <span class="input-group-addon">Search</span>
            <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
          </div> -->
        </div>
        <br />
        <div id="result"></div>
      </div>
      <div class="col-sm">
        <img src="../img/add.svg" style="width:40%"><br>
        <p>Crear citas personalizadas y permite que a tus clientes les llegue un recordatorio</p>
        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
          Agregar cita
        </button>

        <?php include('template/add_cita.php'); ?>
      </div>
    </div>


    <script src="js/citas.js"></script>

    <!-- footer -->

</body>


</html>