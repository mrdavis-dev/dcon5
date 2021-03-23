<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Boxdy | Pedidos</title>
</head>
<body>

    
    
    <div class="container mt-5" style="font-family: 'Concert One', cursive; margin-bottom:100px;">
    <?php
        include("navbar.php");
    ?>
        <img src="boxdy.png" class="mx-auto d-block img-fluid" width="460" height="345">
        <h2>Completa los campos solicitados para darte una atencion mas personalizada y exlusiva.</h2>

        <form action="sendtelegram.php">
        <div class="form-group" style="margin-top: 30px;">
            <label for="name">Nombre:</label>
            <input type="name" class="form-control" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="num">whatsapp:</label>
            <input type="number" class="form-control" placeholder="Enter cellphone" name="number">
        </div>
        <div class="form-group">
            <label>Presupuesto maximo:</label>
            <input type="number" class="form-control" placeholder="Enter budget" name="max">
        </div>
        <div class="form-group">
            <label>Presupuesto mínimo:</label>
            <input type="number" class="form-control" min="5" placeholder="Enter budget" name="min">
        </div>
        <div class="form-group">
            <label>Cuantanos que tienes en mente:</label>
            <input type="text-area" class="form-control" placeholder="tell us your idea" name="idea">
        </div>
        <div class="form-group">
            <label for="myCheck">si quiero delivey:</label> 
            <input type="checkbox" id="myCheck" onclick="myFunction()">
            <input class="form-control" type="text" id="text" name="text" style="display:none" value="La ubicación se pedira una vez se cancele el pedido pendiente." readonly>
            <p>Solo si deseas el delivery marca la casilla </p>
        </div>
        <div class="form-group">
            <p style="color:#EA1889">Al enviar este formulario un agente de venta se contactara directamente con usted. "Todo esto es para poder brindarle un servicio mas comodo y personalizado."</p>
        </div>
        
        <script>
        function myFunction() {
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");
        if (checkBox.checked == true){
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
        }
        </script>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</body>
</html>