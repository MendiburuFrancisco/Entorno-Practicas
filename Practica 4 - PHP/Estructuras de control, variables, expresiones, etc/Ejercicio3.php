<!----------------------------------------------------------------------------
---------------------  Ejercicio  a ------------------------------------------
------------------------------------------------------------------------------
 
    El siguiente codigo se utiliza para generar una tabla con PHP de 5 filas con 2 columnas
    a traves del comando echo que permite agregar etiquetas al html
 -->

<html>
<head><title>Documento 1</title></head>
<body>
<?php
 echo "<table width = 90% border = '1' >";
 $row = 5;                                  // Establece la cantidad de filas que tendra la tabla
 $col = 2;                                  // Establece la cantidad de columnas que tendra la tabla


 for ($r = 1; $r <= $row; $r++) {            
 echo "<tr>";                               // Abre una fila por cada iteraciones que realiza el for de la linea anterior
 for ($c = 1; $c <= $col;$c++) {
 echo "<td>&nbsp;</td>\n";                  // Agrega columnas vacias
 } echo "</tr>\n";                          // Cierra la fila
 }
 echo "</table>\n";                         // Cierra la tabla
?>
</body></html>


<!----------------------------------------------------------------------------
---------------------  Ejercicio b  ------------------------------------------
------------------------------------------------------------------------------
 
    El siguiente codigo se utiliza para determinar si una persona es mayor o menor edad, 
    segun si tieen más de 21 años o no. 

 -->


<html>
<head><title>Documento 2</title></head>
<body>
<?php
if (!isset($_POST['submit'])) {
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Edad: <input name="age" size="2">                                     
 <input type="submit" name="submit" value="Ir">                          
 </form>
<?php
 }
else {
 $age = $_POST['age'];
 if ($age >= 21) {
 echo 'Mayor de edad';
 }
 else {
 echo 'Menor de edad';
 }
}
?>
</body></html>