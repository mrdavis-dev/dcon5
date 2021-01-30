<?php

if (isset($_POST["cate"])) {
    $cate1 = $_POST["cate1"];
    $cate2 = $_POST["cate2"];
    $cate3 = $_POST["cate3"];
    $cate4 = $_POST["cate4"];


    // $con = "INSERT into categorias(catego) values ('$cate1'),('$cate2'),('$cate3'),('$cate4')";
    $con1 = "UPDATE categorias SET catego = '$cate1' WHERE id = 1";  
    $con2 = "UPDATE categorias SET catego = '$cate2' WHERE id = 2";   
    $con3 = "UPDATE categorias SET catego = '$cate3' WHERE id = 3";   
    $con4 = "UPDATE categorias SET catego = '$cate4' WHERE id = 4";   

    mysqli_query($link,$con1);
    mysqli_query($link,$con2);
    mysqli_query($link,$con3);
    mysqli_query($link,$con4);
}
?>
