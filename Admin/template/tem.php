<nav class="navbar navbar-expand-lg navbar-light bg-light ">
          <a class="navbar-brand" href="./welcome.php"><img src="../img/logo.png" style="width:75px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <!-- <li class="nav-item">
                <a class="nav-link" href="./productos.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./register.php">Configurar correo</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="./resetpassword.php">Cambiar contraseña</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link active" href="./historial.php">Historial</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link " href="./emp.php">Usuarios</a>
              </li> -->
            </ul>

            <form class="form-inline my-2 my-lg-0">
              <div class="container-fluid p-2 ">
                <span class="p-2">
                  <img src="../img/user.svg" class="rounded-circle " alt="" height="40">
                  <span>Hola, <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
                </span>
                <!-- <a href="reset-password.php" class="btn btn-warning"></a> -->
                <a href="logout.php" class="btn btn-danger mr-1">Cerrar sesion</a>
              </div>
            </form>
          </div>
        </nav>