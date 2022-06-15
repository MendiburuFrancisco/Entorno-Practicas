<?php
$id = $_GET['id'];

$carrito = $_SESSION['carrito'];

foreach($carrito as $producto)
{
    if($produto['id'] == $id)
    {
        unset($carrito[$producto]);
        break;
    }
}

$_SESSION['carrito'] = $carrito;

header("Location:index.php");

?>