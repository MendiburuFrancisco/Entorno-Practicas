<?php


    if(isset($_POST["nombre"]))
    { 
        $nombre = $_POST["nombre"];
        setcookie("nombre", $_POST["nombre"], time() + (60 * 60 * 24 * 90));
        // $archivoActual = $_SERVER['PHP_SELF'];
        // header("refresh:1;url=".$archivoActual);
        header("Location:ejercicio_1_2_3.php");
    }
    
 
?>
