<!----------------------------------------------------------------------------
---------------------  Ejercicio a  ------------------------------------------
-------------------------------------------------------------------------------->
<?php
    $matriz = array("x" => "bar", 12 => true);
    echo $matriz["x"];      // "bar" <- resultado
    echo $matriz[12];       // 1     <- resultado
?>

<!----------------------------------------------------------------------------
---------------------  Ejercicio b  ------------------------------------------
-------------------------------------------------------------------------------->
<?php
    $matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
    echo $matriz["unamatriz"][6];           // 5 <- resultado
    echo $matriz["unamatriz"][13];          // 13 <- resultado
    echo $matriz["unamatriz"]["a"];         // 42 <- resultado
?>

<!----------------------------------------------------------------------------
---------------------  Ejercicio c  ------------------------------------------
-------------------------------------------------------------------------------->
<?php
    $matriz = array(5 => 1, 12 => 2);
    $matriz[] = 56;
    $matriz["x"] = 42; 
    unset($matriz[5]); 
    unset($matriz);
?> 