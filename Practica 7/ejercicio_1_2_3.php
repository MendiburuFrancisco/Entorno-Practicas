
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
        integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
</head>

    <?php if (isset($_COOKIE["themeSwitcher"]) && $_COOKIE["themeSwitcher"] == "dark"){?>
<body class=" bg-dark bg-opacity-75 text-light">
    <?php }else{ ?>
<body class=" bg-light text-dark"> 
    <?php } ?>
        <main class="container mt-4 p-3 bg-dark text-light">

            <form action="themeSwitcher.php" method="post">

                <div class="row">
                    <div class="col">
                        <p class="text text-light">Configurar estilo</p>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <div class="form-check form-switch mx-3">
                        <input type="hidden" name="themeSwitcher" id="themeSwitcher" value="light" />
                        <input class="form-check-input" type="checkbox" role="switch" name="themeSwitcher"
                                id="themeSwitcher" value="dark"  <?php echo ((isset($_COOKIE['themeSwitcher']) and $_COOKIE['themeSwitcher'] =="dark") ?  'checked' : ''); ?>>
                            <label class="form-check-label" for="themeSwitcher" >Fondo oscuro</label>
                        </div>
                        <p class="text text-muted me-1">| Color del texto </p>
                        
                        <button type="submit" class="btn btn-primary ">Actualizar</button>

                    </div>
                    <hr>


                </div>
            </form>


            <h1 class="text text-center">Bonsoir, <?php echo isset($_COOKIE['nombre'])?  ($_COOKIE['nombre']) : ('Elliot'); ?></h1>

            <?php
            if(isset($_COOKIE["contador"]))
            {
                $contador = $_COOKIE["contador"];
                echo ('<p class="text text-center"> Te salude '.$contador.' veces</p>');
                setcookie("contador",$contador+1, time() + (60 * 60 * 24 * 90));
                ?>
            <p class="text text-center">¿Pero tu nombre es realmente <?php echo isset($_COOKIE['nombre'])? $_COOKIE['nombre']: 'Elliot'; ?>?</p><br>
            <form action="changeName.php" method="post" class="input-group mb-3">
                <input type="text" name="nombre" id="nombre" class="form-control ms-4" placeholder="ingresa tu nombre" aria-label="Recipient's username">
                <button class="btn btn-outline-secondary me-4" type="submit" id="button-addon2">Guardar</button>

            </form>
                <?php

            }
            else
            {
                echo ('<p class="text text-center">¡Bienvenido!</p>');
                setcookie("contador",1, time() + (60 * 60 * 24 * 90));
            }
            ?>

      
        </main>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</html>