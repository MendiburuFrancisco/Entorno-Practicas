<?php
session_start();

$username =  $_SESSION['usuario'];
$password = $_SESSION['contrasenia'];

echo " usuario: " . $username . " contrasenia: " . $password;

?>