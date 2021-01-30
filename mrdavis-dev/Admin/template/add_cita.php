<?php 
include('../config/conexion.php');

$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tipo_consulta = $_POST['tipo_consulta'];
$consulta = $_POST['consulta'];

$sql = "insert into citas (fecha, consulta, tipo_consulta, nombre, email) values ('$fecha', '$nombre','$email','$tipo_consulta','$consulta')";
mysqli_query($db,$sql);

echo ("<script>
      window.alert('Cita agregada);
      window.location.href='../index.php?guardado';
      </script>");
?>