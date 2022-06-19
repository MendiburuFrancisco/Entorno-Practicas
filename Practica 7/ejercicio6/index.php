<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 6</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
        integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
 

</head>

<body class="container bg-light text-dark">
    
<main class="">
<div class="row mx-3 my-3 d-flex justify-content-center">
    <div class="col-12 col-sm-5 bg-white d-flex justify-content-center">
        <form action="validar.php" id="form1" method="post" class=" my-3">
            <fieldset class="">
                <label for="email" class="form-label">Email</label>
                <input type="email" id='email' name="email" class="form-control rounded" placeholder="ingrese su email">
            </fieldset>
            <button    type="submit" class="btn btn-primary">Validar existencia</button>
        </form>

    </div>
</div>
    </body>
</main>

</html>