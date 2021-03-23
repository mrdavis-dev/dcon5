<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'boebd5slpd7q4dumxrca-mysql.services.clever-cloud.com');
define('DB_USERNAME', 'ukh1c0rd6quvod3x');
define('DB_PASSWORD', 'OtSrOG7u9E0A32aaQcvd');
define('DB_NAME', 'boebd5slpd7q4dumxrca');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
