<?php

if (isset($_POST["cate"])) {
    $cate1 = $_POST["cate1"];
    $cate2 = $_POST["cate2"];
    $cate3 = $_POST["cate3"];
    $cate4 = $_POST["cate4"];


    // $con = "INSERT into categorias(catego1,catego2,catego3,catego4) values ('$cate1','$cate2','$cate3','$cate4')";
    
    $con = "UPDATE categorias
    SET catego1 = IF('$cate1' = '', catego1, '$cate1'),
    catego2 = IF('$cate2' = '', catego2, '$cate2'),
    catego3 = IF('$cate3' = '', catego3, '$cate3'),
    catego4 = IF('$cate4' = '', catego4, '$cate4')
    WHERE id";

    mysqli_query($link,$con);
}
?>
