<!----------------------------------------------------------------------------
---------------------  Ejercicio a  ------------------------------------------
-------------------------------------------------------------------------------
    
    El siguiente código devuelve la fecha y hora del servidor y lo muestra 
    por pantalla

->
<?php
    $fun = getdate();          // devuelve la fecha actual 
    echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
    segundos, del $fun[mday]/$fun[mon]/$fun[year]";
    // Has entrado en esta pagina a las 19 horas, con 53 minutos y 49 segundos, del 16/5/2022

?>

<!- --------------------------------------------------------------------------
---------------------  Ejercicio b  ------------------------------------------
-------------------------------------------------------------------------------
    Devuelve
        "5+6=11"
->
<?php
    function sumar($sumando1,$sumando2){
        $suma=$sumando1+$sumando2;                  # $suma = 5+6;
        echo $sumando1."+".$sumando2."=".$suma;     # echo 5."+".6."=".11;
    }
    sumar(5,6);
?>