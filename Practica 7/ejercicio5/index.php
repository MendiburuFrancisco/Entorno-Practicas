<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
  <main class="container">

    <form action="session.php" id="form1" method="post" class="form">

      <fieldset>
        <legend>Crear Sesion </legend>
        <label for="username" class="form-label">Usuario</label>
        <input type="text" class="form-control" id='usuario' name="usuario" placeholder="Ingresa tu usuario" required>
        <br />
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contrasenia" id="contrasenia"
          placeholder="Ingrese su contrasenia" required>
  
          <br>
          <button class="btn btn-primary" type="submit">Crear Sesion</button>
      </fieldset>
 
    </form>



  </main>
</body>

</html>