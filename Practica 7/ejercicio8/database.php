<?php



function abrirConexion()
{
    $host = "127.0.0.1:3306";
    $user = "root";
    $password = "";
    $link =  mysqli_connect($host,$user,$password) or die("Ups.. Hubo un problema devolviendo la informacion solicitada :(");
    return $link;
}

function realizarQuery($nombreEsquema="buscador",$query)
{
    
    $link = abrirConexion();
    mysqli_select_db($link,$nombreEsquema); 
    $res = mysqli_query($link,$query) or die(mysqli_error($link));
    mysqli_close($link);   
    return $res;
}
 
function devolverTabla($limit="")
{
    $query = "SELECT * FROM buscador ".$limit;
    return realizarQuery("prueba",$query);
    
}

function buscar($busqueda,$limit ="")
{
    $query = "SELECT * FROM buscador WHERE cancion LIKE '%".$busqueda."%' ".$limit;
    return realizarQuery("prueba",$query);
}
 
 
 
 
    
 
?>
