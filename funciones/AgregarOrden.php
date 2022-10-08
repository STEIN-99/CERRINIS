<?php
include 'BaseDatos.php';


$pagos=$_POST['pagos'];
$entregas=$_POST['entregas'];
$fechas=$_POST['fechas'];
$conceptos=$_POST['conceptos'];
$montos=$_POST['montos'];


// $codigopostal=$_POST['codigopostal'];
$sqq="INSERT INTO ordenes VALUES (null, '1', '1', '2022-04-26','orden1','123')";
echo $a=mysqli_query($con,$sqq);





mysqli_close($con);


?>
