<?php

include 'BaseDatos.php';


$idv=$_GET['NO_ORDEN'];


$sql="DELETE FROM ordenes  WHERE NO_ORDEN = $idv ";
echo $E=mysqli_query($con,$sql);

if ($sql) {
header("location: ../admin.php");
}else {
  echo "Error";
}


mysqli_close($con);


?>