<?php
include 'BaseDatos.php';


$user=$_GET['user'];
$pass=$_GET['pass'];


$sql="INSERT INTO login  VALUES (null, '$user','$pass', 0)";

echo $E=mysqli_query($con,$sql);


if ("$sql") {
  echo "Error";
}else {
  echo "Error";
}



mysqli_close($con);


 ?>
<script>
