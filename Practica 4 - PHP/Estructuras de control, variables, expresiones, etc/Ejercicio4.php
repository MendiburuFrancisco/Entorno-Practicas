<!----------------------------------------------------------------------------
---------------------  Ejercicio  4 ------------------------------------------
------------------------------------------------------------------------------
 
   La primera llamada nos devolverá 
   El
   La siguiente sin embargo nos devolvera: 
   El clavel blanco
 -->


<?php
    $color = 'blanco';
    $flor = 'clavel';
?>

<?php
    echo "El $flor $color \n";      // Devuelve: El
    include 'datos.php';
    echo " El $flor $color";        // Devuelve: El clavel blanco
?>