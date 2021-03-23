<?php
define ('url',"https://api.telegram.org/bot1766696658:AAHucaxTEjWz16v245mRc3amSqVX7I1LtzA/");
//variables a enviar
$name = $_GET['name'];
$number = $_GET['number'];
$max = $_GET['max'];
$min = $_GET['min'];
$idea = $_GET['idea'];
$text = $_GET['text'];
$chat_id = '-526938874';
$message = urlencode("Pedido nuevo 😄 \n \n Nombre: ".$name."\n Whatsapp : https://api.whatsapp.com/send?phone=507".$number."&text=Hola%20amiga(o)%20gracias%20por%20preferir%20a%20boxdy%2C%20hemos%20recibido%20tu%20formulario%20con%20%C3%A9xito.%F0%9F%98%83%F0%9F%8E%89 \n Maximo a invertir: ".$max."\n Minimo a invertir: ".$min."\n Idea a confeccionar: ".$idea."\n Delivery: ".$text);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

echo ("<script>
      window.alert('Un agente de ventas esta reciviendo en este momento tu solicitud');
      window.location.href='./';
      </script>");
?>