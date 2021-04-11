<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=RocknRoll+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>whatsapp link</title>
</head>

<body>

    <div class="container mt-5">
        <div class="text-center">
            <div class="mb-5">
                <img src="https://img.icons8.com/dusk/128/000000/whatsapp.png" />
            </div>
            <h1 style="font-family: 'Dela Gothic One', cursive;">WACONM LINK WHATSAPP</h1>
        </div>

        <div class="mb-3 mt-5 text-center w-75 mx-auto">
            <h4 style="font-family: 'RocknRoll One', sans-serif;" for="exampleFormControlInput1" class="form-label">Coloca el numero de celular</h4>
            <input style="text-align: center;" type="text" id="myInput" class="form-control rounded-pill border border-success" id="exampleFormControlInput1" placeholder="ejemplo: 14140598">
        </div>
        <div class="text-center">
            <!-- btn link copy -->
            <input class="btn btn-success" onclick="genlink()" style="width: 220px;" type="button" value="GENERAR ENLACE">


            <!-- Resultado link-->
            <div class="mt-5" id="res" style="display: none;">
                <input id="input" type="text" class="form-control text-center w-25 mx-auto" readonly />
                <!-- <button id="execCopy"> execCopy </button> -->
                <button style="margin-top: 5px;" class="btn btn-light" id="clipboardCopy"> 📋 copy </button>
            </div>

        </div>


        <div class="row mt-5">
            <div class="col mt-5">
                <li style="font-family: 'RocknRoll One', sans-serif;">Escribe solo el numero sin espacios ni guiones y genera un link para contactar a otro usuario de whatsapp sin agregarlo a tus contactos o simplemente crea un link para compartir tu numero de whatsapp.</li><br>

            </div>
            <div class="col mt-5">
                <img src="cha.svg" width="80%" alt="">
            </div>
        </div>

        <script src="fun.js"></script>


</body>

</html>