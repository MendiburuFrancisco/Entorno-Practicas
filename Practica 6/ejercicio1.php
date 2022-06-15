<!----------------------------------------------------------------------------
---------------------  Ejercicio 1  ------------------------------------------

Consulta a una base de datos: Para comenzar la comunicación con un servidor de base 
de datos MySQL, es necesario abrir una conexión a ese servidor. 

-------------------------------------------------------------------------------->
<?php
 
mysqli_connect();

// <!----------------------------------------------------------------------------
// ---------------------  Ejercicio 2  ------------------------------------------

// Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios: 

// -------------------------------------------------------------------------------->
 
$host = "192.168.1.1:3306";
$user = "root";
$password = "admin";

$link = mysqli_connect($host,$user,$password);

 
// <!----------------------------------------------------------------------------
// ---------------------  Ejercicio 3  ------------------------------------------
// Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, 
// mediante la función :
mysqli_select_db();
// -------------------------------------------------------------------------------->

$db_name = "sistema_consultas";
mysqli_select_db($db_name,$link);


// <!----------------------------------------------------------------------------
// ---------------------  Ejercicio 4  ------------------------------------------
// Esta funcion debe pasar como parametro 
// -------------------------------------------------------------------------------->


?>