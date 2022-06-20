<?php

if (!empty($_POST['periódico'])) {
  $noticia = $_POST['periódico'];
  setcookie('noticia', $noticia);
  header('Location: index.php');
} else {
  if (!empty($_COOKIE['noticia'])) {
    $preferencia = $_COOKIE['noticia'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>



<body class="container">
    <main class="d-flex justify-content-center pt-4">
        <?php if (empty($preferencia)) { ?>
 
        <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <fieldset>
            <legend>Seleccione el tipo de noticias que le gustaria ver</legend>
        
        <div class="mb-3 form-check">
            <input type="radio" name="periódico" value="politica" id="politica">
            <label for="politica">Noticia política</label>
        </div>
        <div class="mb-3 form-check">
            <input type="radio" name="periódico" value="economica" id="economica">
            <label for="economica">Noticia económica</label>
        </div>
        <div class="mb-3 form-check"><input type="radio" value="deportiva" id="deportiva" name="periódico">
            <label for="deportiva">Noticia deportiva</label></div>
   
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Guardar preferencia</button>
            </div>
            </fieldset>
        </form>
        <?php } else {
            
            echo "<h1> Noticia $preferencia</h1>";
            echo "<br/>";
            echo '<a href="eliminarPreferencia.php">Eliminar preferencia</a>';
        } ?>
    </main>
</body>

</html>