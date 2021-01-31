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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body class="bg-dark text-white">
    <div class="container text-center">
        <div class="container centrado" style="margin-top:10%">
            <div class="centrar animated fadeIn slow container border-bottom  mt-5">
                <?php include('post_index/querys.php'); ?>
                <img src="<?php echo $image_src;  ?>" style="width:50%">
                <!-- <img src="Admin/upload/tulogo.png" alt=""> -->
                <p class="display-4"><?php echo $titulo;  ?></p>
            </div>
            <div class="centrar conrainer mt-3">
                <button style="width:250px" type="button" class="sombra m-4 btn btn-primary btn-lg" data-toggle="modal" data-target="#Mymodal-2">Agendar cita</button>
                <button style="width:250px" type="button" class="sombra m-4 btn btn-primary btn-lg" data-toggle="modal" data-target="#Mymodal-2">Más</button><br>
                <p>Sigueme en mis redes sociales</p>
                <?php 
                
                // if(){
                    
                // }
                ?>
                <?php echo('<a href=""><img style="width:50px" src="https://img.icons8.com/nolan/64/telegram-app.png"></a>') ?>
                <?php echo('<a href=""><img style="width:50px" src="https://img.icons8.com/nolan/64/facebook-new.png"></a>') ?>
                <?php echo('<a href="https://www.instagram.com/'.$red1.'/"><img style="width:50px" src="https://img.icons8.com/nolan/64/instagram-new.png"></a>') ?>
                <?php echo('<a href=""><img style="width:50px" src="https://img.icons8.com/nolan/64/whatsapp.png"></a>') ?>
            </div>
        </div>
        <div class="container centrado" style="margin-top:10%">


            <!-- MODAL DE CITAS -->
            <div class="modal fade bg-dark text-dark" id="Mymodal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agendar mi cita</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="post_index/insert.php" method="POST">
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
                                    <!-- <select name="tipo" required class="form-control" id="">
                                        <option value="">Seleccione el tipo de consulta...</option>
                                        <option value="Programación web/mobile">Programación web/mobile</option>
                                        <option value="Docker">Docker</option>
                                        <option value="Android">creacion de proyectos</option>
                                        <option value="cloud">cloud</option>
                                        <option value="server">Servers</option>
                                    </select> -->
                                    <select required class="form-control">
                                        <option value="0">Seleccione:</option>
                                        <?php
                                        $query = $link->query("SELECT * FROM categorias");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['catego1'] . '">' . $valores['catego1'] . '</option>';
                                            echo '<option value="' . $valores['catego2'] . '">' . $valores['catego2'] . '</option>';
                                            echo '<option value="' . $valores['catego3'] . '">' . $valores['catego3'] . '</option>';
                                            echo '<option value="' . $valores['catego4'] . '">' . $valores['catego4'] . '</option>';
                                        }
                                        ?>
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
        <?php include("../template/footer.php") ?>
    </div>
    
    
</body>

</html>