<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['contrasenia'] = $_POST['contrasenia'];

header('Location:   obtenerValor.php');