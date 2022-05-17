<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar email</title>
    <!-- CSS only -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
        crossorigin="anonymous">
</head>
<body class=" bg-light">

    <?php
        session_start();
        if (isset($_SESSION['contador'])) {
        $_SESSION['contador'] += 1;
        } else {
        $_SESSION["contador"] = 1;
        }
        
        echo "Cant. de veces que visitaste esta pagina: " . $_SESSION['contador'];
    ?>
    

    <main class="container">
        
    <form class="p-3 m-3  bg-white"  method="POST" action="ejercicio1.php" >
    <h1>Enviar Email</h1>
        <div class="form-group">
            <label for="username">Nombre</label>
            <input type="text" class="form-control" id="username" placeholder="Ingresa tu nombre" required> 
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email"  placeholder="ingresar email" required>
             
        </div>
        <div class="form-group">
            <label for="emailSubject">Asunto</label>
            <input type="text" class="form-control" id="emailSubject" placeholder="ingresa el asunto del mail" required>
        </div>
 
        <div class="form-group">
            <label for="emailMessage">Mensaje</label>
            <textarea name="asunto" class="form-control" id="emailMessage" placeholder="Escribe un mensaje..." rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary my-3">Enviar</button>
    </form>

    
    </main>

    <main class="container">
        
        <form class="p-3 m-3  bg-white"  method="POST" action="Ejercicio3_script.php" >
        <h1>Recomendar página</h1>
            <div class="form-group">
                <label for="username_2">Nombre</label>
                <input type="text" class="form-control" id="username_2" placeholder="Ingresa tu nombre" required> 
            </div>
            <div class="form-group">
                <label for="email_2">Email</label>
                <input type="email" class="form-control" id="email_2"  placeholder="ingresar el email de quien quieras recomendar esta página" required>
                 
            </div>
          
     
            
            <button type="submit" class="btn btn-primary my-3">Recomendar página</button>
        </form>
        </main>

    

</body>
</html>