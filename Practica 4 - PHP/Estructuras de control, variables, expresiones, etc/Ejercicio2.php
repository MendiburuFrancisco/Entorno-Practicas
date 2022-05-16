<!----------------------------------------------------------------------------
---------------------  Ejercicio  a ------------------------------------------
------------------------------------------------------------------------------

Estos bloques de codigo producen una expresión equivalente
Dando como resultado
1 2 3 4 5 6 7 8 9 10


-->


<!-- 1er bloque de codigo -->
<?php
$i = 1;
while ($i <= 10) {  // Itera hasta que sea igual a 10
 print $i++;        // Primero muestra el numero, luego lo aumenta
}
?>
<!-- 2do bloque de codigo -->
<?php
$i = 1;
while ($i <= 10):
 print $i;
 $i++;
endwhile;
?>
<!-- 3er bloque de codigo -->
<?php
$i = 0;          // Comienza el contador con cero
do {             // Primero realiza la accion y luego evalua la expresion para comenzar a iterar
 print ++$i;     // Primero aumenta el valor del contador y lo muestra
} while ($i<10); // Itera hasta que sea menor a 10, es decir 9,
                    // dado que es el valor en el que luego se aumentara para alcanzar al 10
?>

<!----------------------------------------------------------------------------
---------------------  Ejercicio  b ------------------------------------------
------------------------------------------------------------------------------


Estos bloques de codigo producen una expresión equivalente
Dando como resultado
1 2 3 4 5 6 7 8 9 10

 -->

 <?php
for ($i = 1; $i <= 10; $i++) {  
 print $i;
}
?>


<?php
for ($i = 1; $i <= 10; print $i, $i++) ;
?>


<?php
for ($i = 1; ;$i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
?>


<?php
$i = 1;
for (;;) {
 if ($i > 10) {
 break;
 }
 print $i;
 $i++;
}
?>


<!----------------------------------------------------------------------------
---------------------  Ejercicio  c ------------------------------------------
------------------------------------------------------------------------------


Estos bloques de codigo producen una expresión equivalente
Dando como resultado
1 2 3 4 5 6 7 8 9 10

 -->

<?php
…
…
if ($i == 0) {
 print "i equals 0";
} elseif ($i == 1) {
 print "i equals 1";
} elseif ($i == 2) {
 print "i equals 2";
}
?>

<?php
…
…
switch ($i) {
 case 0:
 print "i equals 0";
 break;
 case 1:
 print "i equals 1";
 break;
 case 2:
 print "i equals 2";
 break;
}
?>