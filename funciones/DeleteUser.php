<?php

include 'BaseDatos.php';


$idv=$_GET['ID_USUA'];


$sql="DELETE FROM login  WHERE ID_USUA = $idv ";
echo $E=mysqli_query($con,$sql);

if ($sql) {
header("location: ../admin.php");
}else {
  echo "Error";
}


mysqli_close($con);


?>