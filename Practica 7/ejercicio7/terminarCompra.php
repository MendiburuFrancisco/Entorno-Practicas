<?php
session_start();
$_SESSION['carrito'] = NULL; 

header("Location:index.php");

?>