<?php
// include("config/conexion.php");

if (isset($_POST['sub'])) {
    $name_titulo = $_POST['titulo'];
    $sql = "UPDATE titulo set tito='$name_titulo' where id=1";
    mysqli_query($link, $sql);

    echo ("<script>
      window.alert('Titulo agregado);
      window.location.href='../cms.php';
      </script>");
}
?>
