<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <title>DCON | Como lo hago</title>
</head>

<body>
    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <?php include("template/navbar.php"); ?>

        <div class="site-blocks-cover inner-page-cover bg-light mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <h1 class="mb-0">Como obtener tu portal de atención</h1>
                        <a href="index.php">Home</a><span class="mx-2">&bullet;</span> como obtener mi portal
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section pt-3">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="display-5 mb-3 text-black">Pasos para obtener tu portal</h2>
                    </div>
                    <div class="col-lg-6">
                        <img src="img/data.svg" style="width:350px" alt="Image" class="img-fluid mb-3">
                        <p>DCON se encunetra en un fase beta, por lo tanto para crear tu perfil has un pre-registro <a href="register.php">aqui</a> y te contactaremos para que puedas modificar y ordenar tu espacio
                            digital.</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Para obtener un tu espacio es requisito pagar una tarifa mensual por la cual obtendras beneficios unicos. ten un ejemplo, si tienes un negocio de tutorias y quieres atender via online y no complicarte con DCON podras
                            crear salas de vide conferencia, podras gestionar la fecha en la que los clientes quieren atenderse contigo, enviarles recordatorios y crear una plantilla para generar graficas de los pagos que ganes con DCON.
                        </p>
                    </div>
                </div>
                <div class="row  justify-content-around">
                    <div class="col-md-12">
                        <img src="img/ciclo.png" alt="Image" class="img-fluid mb-3">

                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="site-section pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mb-5">
                        <h2 class="display-5 mb-5 text-black"></h2>
                    </div>



                </div>
            </div>
        </div> -->

        <?php include("template/footer.php") ?>



    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/mediaelement-and-player.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var mediaElements = document.querySelectorAll('video, audio'),
                total = mediaElements.length;

            for (var i = 0; i < total; i++) {
                new MediaElementPlayer(mediaElements[i], {
                    pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                    shimScriptAccess: 'always',
                    success: function() {
                        var target = document.body.querySelectorAll('.player'),
                            targetTotal = target.length;
                        for (var j = 0; j < targetTotal; j++) {
                            target[j].style.visibility = 'visible';
                        }
                    }
                });
            }
        });
    </script>


    <script src="js/main.js"></script>

</body>

</html>
</body>

</html>