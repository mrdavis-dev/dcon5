<?php
    include ('Admin/config/conexion.php');
        $sql = "select name from images where id=1";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        $image = $row['name'];
        $image_src = "Admin/upload/" . $image;



        $tit = 'select tito from titulo where id=1';
        $titres = mysqli_query($link,$tit);
        $titrow = mysqli_fetch_array($titres);
        $titulo = $titrow['tito'];



        $link_sql = 'select * from redes';
        $link_res = mysqli_query($link,$link_sql);
        $link_row = mysqli_fetch_array($link_res);
        $red1 = $link_row['instagram'];
        $red2 = $link_row['facebook'];
        $red3 = $link_row['whatsapp'];
        $red4 = $link_row['telegram'];

?>

                