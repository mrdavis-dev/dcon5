<?php 
include('../../config/conexion.php');

$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tipo_consulta = $_POST['tipo'];
$consulta = $_POST['asunto'];


$sql = "insert into citas (fecha, consulta, tipo_consulta, nombre, email) values ('$fecha', '$consulta', '$tipo_consulta', '$nombre', '$email')";
mysqli_query($link,$sql);

echo ("<script>
      window.alert('Su petición ah sido enviada y sera respondida en breve');
      window.location.href='index.php';
      </script>");
?>