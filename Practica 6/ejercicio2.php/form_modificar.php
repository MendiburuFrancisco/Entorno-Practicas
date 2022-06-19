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
        
<?php
            include("database.php");
            //Captura datos desde el Form anterior
            
            $fila = mysqli_fetch_array(devolverTabla(" WHERE id = ",$_GET['id']));
 
            ?>
<body class=" bg-light text-dark">

    <main class="container mt-4 p-3 bg-white">
    <a href="index.php">< Volver</a>    
    <h1>Capitales</h1>
        <p>¡Modifica datos de tu ciudad!</p>


        <form class="p-3 mb-2 form" action="modificar.php?id= <?php echo $fila['id'] ?>" method="post" name="form_alta">
            <fieldset>
                <legend>Modificar:  <?php echo $fila['id'] ?></legend>

                <div class="row py-1">
                    <div class="col-3 col-sm-2">
                        <label for="nombre">Nombre:</label>

                    </div>
                    <div class="col">
                        <input type="text" name="nombre" id="nombre" value = "<?php echo $fila['ciudad'] ?>"   class="form-control"
                            placeholder="ingrese el nombre de la ciudad" class="form-input" required autofocus>

                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-3 col-sm-2">
                        <label for="pais">Pais:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="pais" id="pais" value = "<?php echo $fila['pais'] ?>"  class="form-control"
                        placeholder="ingrese el pais de la ciudad" required>

                    </div>
                </div>

                <div class="row py-1">
                    <div class="col-3 col-sm-2">
                        <label for="habitantes">Habitantes:</label>
                    </div>
                    <div class="col  ">
                        <input type="number" min="0" name="habitantes" id="habitantes" value = "<?php echo $fila['habitante'] ?>"  class="form-control"
                        class="form-control" placeholder="ingrese la cantidad de habitantes" required>
                    </div>
                </div>



                <div class="row py-1">
                    <div class="col-3 col-sm-2">
                        <label for="superficie">Superficie:</label>
                    </div>
                    <div class="col">
                        <input type="number"  min="0" step=".01"  class="form-control" name="superficie" id="superficie" value = "<?php echo $fila['superficie'] ?>"
                            placeholder="ingrese en metros cuadrados la cantidad de superficie" required>

                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-3 col-sm-2">
                        <label for="superficie">Tiene metro?:</label>
                    </div>
                    <div class="col">
                        
                            <input type="checkbox" 
                            class="form-check-input"
                            name="tieneMetro" id="tieneMetro" <?php echo ((!$fila['tieneMetro'] == '1')? 'checked' : '') ?>checked  >
                    </div>
                </div>
                <div class="row py-1">
                    <div class=" ">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>

                </div>

            </fieldset>
        </form>
            
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

</html>