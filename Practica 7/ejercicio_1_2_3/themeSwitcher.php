<?php
    if(isset($_POST["themeSwitcher"]) )
        {
            //es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
            $estiloSwitcher = $_POST["themeSwitcher"];

            $estiloSwitcher = ($estiloSwitcher == "dark")? $estiloSwitcher:"light";
            //meto el estilo en una cookie

            setcookie("themeSwitcher", $estiloSwitcher, time() + (60 * 60 * 24 * 90));
            // $archivoActual = $_SERVER['PHP_SELF'];
            // header("refresh:1;url=".$archivoActual);
            
        }

        header("Location:ejercicio_1_2_3.php");
    ?>