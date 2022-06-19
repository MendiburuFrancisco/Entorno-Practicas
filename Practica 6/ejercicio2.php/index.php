<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Ciudades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
        integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
</head>

<body class=" bg-light text-dark">
    <main class="container mt-4 p-3 bg-white">
        <h1>Capitales</h1>
        <p>¡Estas son algunas de las capitales del mundo!</p>

    <div class="row ">
    <form action="" method="GET" class="form col-12 col-sm-5 my-3">
            <div class="input-group">
                <input type="search" id="search" name="search" class="form-control rounded" placeholder="Ingresa la ciudad que quieras buscar"
                    aria-label="Search" aria-describedby="buscar ciudades"  />
                <button type="submit" class="btn btn-outline-primary">Buscar</button>
            </div>
        </form>
        <div class="col my-3">
            <a class=" btn btn-primary" href="form_alta.php">Agregar otra capital</a>

        </div>

    </div>
 
        <table class="table table-striped my-4 ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Habitantes</th>
                    <th scope="col">Superficie</th>
                    <th scope="col">¿Tiene metro?</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php
            include('database.php');
                if(isset($_GET['search']))
                {
                    $tabla = buscar($_GET['search']);
                }
                else
                {
                    
                    $tabla = devolverTabla();
                }

                if (sizeof(mysqli_fetch_array($tabla)) > 0  ){
                    $bandera = True;
                
    
                    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
                    $total = $tabla->num_rows;
                    $limit = 5;
                    $cantPage = ceil($total / $limit);
                    $start =  ($page - 1) * $limit;
                
                    $limitQuery = "LIMIT $start,$limit";
                    if(isset($_GET['search']))
                    {
                        $tabla = buscar($_GET['search'],$limitQuery);
                    }
                    else
                    {
                        
                        $tabla = devolverTablaConLimite($limitQuery);
                    }
     

               while ($fila = mysqli_fetch_array($tabla))
            {
            ?>
            
               <th scope="row"><?php echo($fila['id']); ?></th>
                    <td><?php echo($fila['ciudad']); ?></td>
                    <td><?php echo($fila['pais']); ?></td>
                    <td><?php echo($fila['habitante']); ?></td>
                    <td><?php echo($fila['superficie']); ?></td>
                    <td><?php echo($fila['tieneMetro']); ?></td>
                    <td>
                        <a class=" fs-5" href="form_modificar.php?id=<?php echo($fila['id']); ?>"> <i class="bi bi-pencil-fill">Editar</i></a>

                        <a class="text-danger fs-5" href="eliminar.php?id=<?php echo($fila['id']); ?>"> <i class="bi bi-trash3-fill">Eliminar</i></a>
                    </td>
                    </tr>
            <?php
            }
       
        }
     
        else
        {
            echo "<td>Ups</td>";
            echo "<td>No se encontraron resultados</td>";
        }
        


 

            ?>
                

            </tbody>
        </table>
        <?php
        if($bandera)
        {

        
        ?>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item">
                    <a href="index.php?page=<?= $page - 1 != 0 ?  $page - 1 : 1 ?> <?= isset($_GET['search']) ? '&search=' . $_GET['search'] : ''  ?>"
                        class="<?= $page - 1 == 0 ? 'disabled ' : '' ?> py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-blue-500 hover:text-gray-100 dark:bg-blue-500 dark:border-gray-700 dark:text-gray-100 dark:hover:bg-blue-700 dark:hover:text-white">Previous</a>
                </li>

                <?php for ($i = 1; $i <= $cantPage; $i++) { ?>
                <li class="page-item">
                    <a href="index.php?page=<?= $i ?><?= isset($_GET['search']) ? '&search=' . $_GET['search'] : ''  ?>"
                        class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?= $i ?></a>
                </li class="page-item">

                <?php } ?>
                <li class="page-item">
                    <a href="index.php?page=<?= $page + 1 ?> <?= isset($_GET['search']) ? '&search=' . $_GET['search'] : ''  ?>"
                        class=" <?= $page + 1 > $cantPage ? 'disabled ' : '' ?> py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-blue-800 dark:border-gray-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Next</a>
                </li class="page-item">
            </ul>
        </nav>
        <?php
       }
        ?>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

</html>