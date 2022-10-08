<?php

include 'BaseDatos.php'; //conexion con la base de datos

session_start();

//El usuario y contraseña que se enviaron por el formulario
$username=$_POST['correoe'];
$password=$_POST['pass'];

// La consulta donde se valida los datos

$consulta="select * from login ";
$consulta.= "where  USUARIO='$username' and PASS='$password'";


$resultado=mysqli_query($con,$consulta);
$row=mysqli_fetch_array($resultado);

// Cliente y Administrador realizo un arreglo donde verifico el tipo de ususario si es 0
//Lo enviara al  administrador si es 1 es cliente

if ($row[1]==$username && $row[2]=$password && $row[3] == 0 ) {

$_SESSION['usua']=$username;
echo 'admin';
//header("Location:  ../pag/Administrador.php");

}elseif ($row[1]==$username && $row[2]=$password && $row[3] == 1) {

$_SESSION['usua']=$username;
//header("Location: ../pag/Usuario.php");
echo 'usua';
//Si el usuario no se encuentra se envia un error.

}elseif (!$row[2]==$username && !$row[3]==$password){
  //header("Location:  ../funciones/error.html");
  //echo 'error';
}
  mysqli_close($con);
?>