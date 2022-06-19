
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
        integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
 

</head>
<body class="container">
  <div class="row">
    <div class="col d-flex justify-content-center">
      <h1>

        <?php
      session_start();
      if (!empty($_SESSION['nombre'])) {
        echo 'Bienvenido ' . $_SESSION['nombre'];
      } else {
        echo ' <span> No puede visitar esta pagina ! Primero debes <a href="index.php">Inicia Sesion</a> </span>';
      }
      
      ?>
      </h1>
    </div>
  </div>

</body>
</html>
<?php
