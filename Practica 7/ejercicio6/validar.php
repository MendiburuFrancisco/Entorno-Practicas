<?php

function abrirConexion()
{
    $host = "127.0.0.1:3306";
    $user = "root";
    $password = "";
    $link =  mysqli_connect($host,$user,$password,"base2") or die("Ups.. Hubo un problema devolviendo la informacion solicitada :(");
    return $link;
}

$link = abrirConexion();

if (isset($_POST['email'])) {
  $email = $_POST['email'];
    // var_dump($email);
  $link = abrirConexion();
  $query = "SELECT count(*) as 'cantidad' FROM alumnos WHERE email = '$email' limit 1";
  $result = mysqli_query($link, $query);
  $tabla = mysqli_fetch_array($result);
  if (  $tabla['cantidad'] > 0) {
    
  $query = "SELECT * FROM alumnos WHERE email = '$email' limit 1";
  $tabla = mysqli_query($link, $query);

    session_start();
    $_SESSION['nombre'] = $tabla->fetch_assoc()['nombre'];
      header('Location: bienvenida.php');
  } else {
    echo 'No existe este email :  ' . $email . ' en la base de datos . <a href="index.php">Inicia Sesion</a> </span>';
 
  }
  mysqli_close($link);
} else {
}