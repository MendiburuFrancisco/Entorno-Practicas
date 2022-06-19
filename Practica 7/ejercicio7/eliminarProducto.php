<?php
session_start();
$id = $_GET['id'];

$carrito = $_SESSION['carrito'];

foreach($carrito as $producto)
{
    
    
    if($producto['id'] == $id)
    {
        $index = array_search($producto,$carrito);
        unset($carrito[$index]);
        break;
    }

}


foreach($carrito as $producto)
{
    
    echo ($producto['producto']);
}

$_SESSION['carrito'] = $carrito;

header("Location:index.php");

?>