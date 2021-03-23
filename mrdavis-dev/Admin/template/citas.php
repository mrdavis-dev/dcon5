<?php
$connect = mysqli_connect("boebd5slpd7q4dumxrca-mysql.services.clever-cloud.com", "ukh1c0rd6quvod3x", "OtSrOG7u9E0A32aaQcvd", "boebd5slpd7q4dumxrca");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM citas 
  WHERE fecha LIKE '%".$search."%'
  OR consulta LIKE '%".$search."%' 
  OR nombre LIKE '%".$search."%' 
  OR email LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM citas ORDER BY fecha 
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>#</th>
     <th>fecha</th>
     <th>consulta</th>
     <th>tipo consulta</th>
     <th>nombre</th>
     <th>correo</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["fecha"].'</td>
    <td>'.$row["consulta"].'</td>
    <td>'.$row["tipo_consulta"].'</td>
    <td>'.$row["nombre"].'</td>
    <td>'.$row["email"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>