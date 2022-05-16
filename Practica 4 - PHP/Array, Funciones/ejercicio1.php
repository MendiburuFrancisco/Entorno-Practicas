<!----------------------------------------------------------------------------
---------------------  Ejercicio 1 ------------------------------------------
------------------------------------------------------------------------------
 
    Los siguientes codigos SON EQUIVALENTES
 -->

<?php
    $a = array( 'color' => 'rojo',
    'sabor' => 'dulce',
    'forma' => 'redonda',
    'nombre' => 'manzana',
    4
    );
?> 


<?php
    $a['color'] = 'rojo';
    $a['sabor'] = 'dulce';
    $a['forma'] = 'redonda';
    $a['nombre'] = 'manzana';
    $a[] = 4;
?> 