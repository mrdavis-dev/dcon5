<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>mrdavis-dev</title>
    <link rel="shortcut icon" href="../img/mrdavis.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body>
    <div class="container text-center">
        <div class="container centrado" style="margin-top:10%">
            <div class="centrar animated fadeIn slow container border-bottom  mt-5">
                <img src="../img/mrdavis.png" style="width:50%">
                <p class="display-4">Mrdavis-dev</p>
            </div>
            <div class="centrar conrainer mt-3">
                <button style="width:250px" type="button" class="sombra m-4 btn btn-primary btn-lg" data-toggle="modal" data-target="#Mymodal-2">
                    agendar cita
                </button><br>
                <p>sigueme en mis redes sociales</p>
                <a href="https://www.linkedin.com/in/david-flores-85309717b/?trk=profile-badge-cta&originalSubdomain=pa"><img style="width:30px" src="https://img.icons8.com/ios/50/000000/linkedin.png"></a>
                <a href="https://www.instagram.com/mrdavis.dev/"><img style="width:30px" src="https://img.icons8.com/ios/50/000000/instagram-new--v3.png"></a>
            </div>
        </div>
        <div class="container centrado" style="margin-top:10%">
            <div class="centrar animated fadeIn slow container border-bottom  mt-5">
                <p class="display-4">Clientes</p>
            </div>
            <?php include('pictures.php'); ?>
            
        <!-- CONTENIDO DEL MODAL cliente -->
        <div class="modal fade bg-dark" id="Mymodal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="insert_paciente_exterior.php">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="reset" class="btn" style="background-color:var(--color-3)">Borrar</button>
                            <input type="submit" class="btn btn-primary" name="submit" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!-- MODAL DE CITAS -->
        <div class="modal fade bg-dark" id="Mymodal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agendar mi cita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="insert_exterior.php" method="POST">
                        <div class="modal-body ">
                            <div class="container text-left">
                                <label for="fecha">Fecha para la consulta</label>
                                <input type="date" class="mb-1 form-control border border-primary" placeholder="" name="fecha">

                                <label for="hora">Email</label>
                                <input type="text" class="mb-1 form-control border border-primary" placeholder="" name="email">

                                <label for="nombre">Nombre y Apellido</label>
                                <input type="text" class="mb-1 form-control border border-primary" placeholder="" name="nombre">

                                <label for="asunto">Asunto de la consulta</label>
                                <!-- <input type="textarea" > -->
                                <textarea class="mb-1 form-control border border-primary" placeholder="" name="asunto" cols="15" rows="5"></textarea>

                                <label for="">Tipo de consulta</label>
                                <select name="doctor" required class="form-control" id="">
                                    <option value="">Seleccione el tipo de consulta...</option>
                                    <option value="Programación">Programación web/mobile</option>
                                    <option value="Docker">Docker</option>
                                    <option value="Android">creacion de proyectos</option>
                                    <option value="base de datos">cloud</option>
                                    <option value="linux">Servers</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="reset" class="btn btn-danger">Borrar</button>
                            <input type="submit" class="btn btn-primary" name="" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>