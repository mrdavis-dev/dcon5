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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
                <button style="width:250px" id="commingsoon" type="button" class="sombra m-4 btn btn-primary btn-lg">Más</button><br>
                <p>Sigueme en mis redes sociales</p>

                <script src="js/jsalert.js"></script>
                
                <?php echo('<a href="'.$red4.'"><img style="width:50px" src="https://img.icons8.com/nolan/64/telegram-app.png"></a>') ?>
                <?php echo('<a href="'.$red2.'"><img style="width:50px" src="https://img.icons8.com/nolan/64/facebook-new.png"></a>') ?>
                <?php echo('<a href="https://www.instagram.com/'.$red1.'/"><img style="width:50px" src="https://img.icons8.com/nolan/64/instagram-new.png"></a>') ?>
                <?php echo('<a href="https://api.whatsapp.com/send?phone='.$red3.'"><img style="width:50px" src="https://img.icons8.com/nolan/64/whatsapp.png"></a>') ?>
            </div>
        </div>
        <div class="container centrado" style="margin-top:10%">


            <!-- MODAL DE CITAS -->
            <?php include('post_index/modal_cita.php'); ?>
        </div>
        <?php include("../template/footer.php") ?>
    </div>
    
    
</body>

</html>