<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: index.php");
  exit;
}

// Include config file
require_once "config/conexion.php";

// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate new password
  if (empty(trim($_POST["new_password"]))) {
    $new_password_err = "Porfavor ingresa tu nueva contraseña.";
  } elseif (strlen(trim($_POST["new_password"])) < 6) {
    $new_password_err = "Debe tener por lo menos 6 caracteres.";
  } else {
    $new_password = trim($_POST["new_password"]);
  }

  // Validate confirm password
  if (empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = "Porfavor confirma tu contraseña.";
  } else {
    $confirm_password = trim($_POST["confirm_password"]);
    if (empty($new_password_err) && ($new_password != $confirm_password)) {
      $confirm_password_err = "Las contraseñas no coinciden.";
    }
  }

  // Check input errors before updating the database
  if (empty($new_password_err) && empty($confirm_password_err)) {
    // Prepare an update statement
    $sql = "UPDATE users SET password = ? WHERE id = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

      // Set parameters
      $param_password = password_hash($new_password, PASSWORD_DEFAULT);

      $param_id = $_SESSION["id"];

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Password updated successfully. Destroy the session, and redirect to login page
        echo '<script>alert("Se ha cambiado la contraseña con exito")</script>'; // AQUI INTENTE PONER LA ALERTA
        session_destroy();
        header("location: index.php");
        exit();
      } else {
        echo "Oops! Algo salio mal, intenta denuevo.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
    }
  }

  // Close connection
  mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recovery</title>
  <link rel="stylesheet" href="../style.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Ubuntu&display=swap" rel="stylesheet">
  <!--  -->
  <!-- Animaciones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <!--  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body class="bg-light">
  <header class="font1">
    <?php
    include('template/tem.php')
    ?>
  </header>
  <div class="container">
    <div class="row justify-content-center" style="margin-top: 5%;">
      <div class="col-md-6 col-lg-5 font1">
        <div class="container animate__animated animate__fadeIn animate__slow p-4 bg-white font2 shadow border rounded">
          <h2 class="p-2 font1 text-center">Restaurar contraseña</h2>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
              <label>Nueva contraseña</label>
              <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
              <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
              <label>Confirmar contraseña</label>
              <input type="password" name="confirm_password" class="form-control">
              <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group ">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-sm-12 col-md-6 mt-2">
                    <input type="submit" class="btn btn-primary btn-block " value="Aceptar">
                  </div>
                  <div class="col-sm-12 col-md-6 mt-2">
                    <a href="welcome.php" class="btn btn-danger btn-block">Cancelar</a>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="fixed-bottom font1">
    <div class="p-4 text-center animate__animated animate__fadeIn animate__delay-1s">
      <span>Develop by</span>
      <span class="text-info">Develgeek</span>
    </div>
  </footer>
</body>

</html>