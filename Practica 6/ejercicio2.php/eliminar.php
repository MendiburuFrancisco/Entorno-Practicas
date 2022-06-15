<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Ciudades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
        integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
</head>

<body class=" bg-light text-dark">
    <?php
    include('database.php');
    if(eliminarCapital($_GET['id']))
    {
    ?>
        <main class="container mt-4 p-3 bg-white">
            <a href="index.php">
                < Volver</a> <h1>Se eliminó correctamente</h1>
                    <p>¡Se eliminó la ciudad!</p>
        </main>
    <?php
    }else
    {  
    ?>
    <main class="container mt-4 p-3 bg-white">
        <a href="index.php">
            < Volver</a> <h1>Ups.. hubo un error al eliminar dicha ciudad :C</h1>
    </main>
    <?php    
    } 
   ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

</html>