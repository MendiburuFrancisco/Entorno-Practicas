<?php
$id = $_GET['id'];
session_start();
$producto = devolverProducto($id);

echo $producto['producto']." producto < ";
echo $id;

$carrito = $_SESSION['carrito'];
// echo " | carrito:".$carrito;
// echo " | exite? ".siExisteEnArraySumarCantidad($producto,$carrito);

if($carrito)
{
    if(!siExisteEnArraySumarCantidad($producto,$carrito))
    {
        $producto['cantidad'] = 1;
        #array_push($producto,array("cantidad"=>1));
        array_push($carrito,$producto);
        echo $carrito;
    }
    
}
else
{
    $producto['cantidad'] = 1;
    // array_push($producto,array("cantidad"=>1));
    echo $producto['cantidad'];
    $arreglo = [];
    array_push($arreglo,$producto);
    $carrito = $arreglo;
}
 
$_SESSION['carrito'] = $carrito;



header("Location:index.php");


function siExisteEnArraySumarCantidad($producto,&$array)
{
    $estaAgregado = false;
    if($array)
    {
        foreach($array as &$elemento)
        {
            if($elemento['id'] == $producto['id'])
            {
                $estaAgregado = true;
                echo "elemento encontrado con cantidad: ".$elemento['cantidad']; 
                $elemento['cantidad'] = $elemento['cantidad'] + 1;
                break;
            }
        }
    }
 
    return $estaAgregado;
}

function devolverProducto($id)
{
    $host = "127.0.0.1:3306";
    $user = "root";
    $password = "";
    $db = "catalogo";
    $link =  mysqli_connect($host,$user,$password) or die("Ups.. Hubo un problema devolviendo la informacion solicitada :(");
    mysqli_select_db($link,$db); 
    $tabla=mysqli_query($link,"select * from catalogo WHERE id = ".$id." limit 1");
    mysqli_close($link); 
    $filas = mysqli_fetch_array($tabla);
    return $filas;
}
?>