<?php

if (isset($_POST["btnred"])) {
    $red1 = $_POST["red1"];
    $red2 = $_POST["red2"];
    $red3 = $_POST["red3"];
    $red4 = $_POST["red4"];


    // $con = "INSERT into redes(instagram,facebook,whatsapp,telegram) values ('$red1','$red2','$red3','$red4')";
    // $con = "UPDATE redes set instagram = if(instagram IS not NULL, '$red1', instagram), facebook = if(facebook IS NULL, '$red2', facebook), 
    //                          whatsapp = if(whatsapp IS NULL,'$red3',whatsapp), telegram = if(telegram IS NULL,'$red4',telegram)";

       $con = "UPDATE redes
       SET instagram = IF('$red1' = '', instagram, '$red1'),
       facebook = IF('$red2' = '', facebook, '$red2'),
       whatsapp = IF('$red3' = '', whatsapp, '$red3'),
       telegram = IF('$red4' = '', telegram, '$red4')
       WHERE id";


    mysqli_query($link, $con);
}
