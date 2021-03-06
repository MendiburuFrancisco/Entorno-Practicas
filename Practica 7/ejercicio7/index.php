<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComprAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
        integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
</head>

<body class="container bg-dark text-light">
    <main class="bg-secondary m-3 p-3">
        <div class="row">
            <div class="col">
                <h1 class="py-3">Catalogo</h1>

            </div>


            <div class="col d-flex justify-content-end align-items-center">
                <button class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                    title="carrito de compras" aria-controls="offcanvasExample">
                    <?php   
                    if(!isset($_SESSION['carrito']))
                    {
                    ?>
                    <span> <i class="bi bi-cart"></i></span>
                    Carrito
                    <?php 
                    }
                    else
                    {?>
                    <span> <i class="bi bi-cart-fill"></i></span>
                    Carrito <?php echo ("(".count($_SESSION['carrito']).")")  ?>
                    <?php
                    }
                    ?>

                </button>



                <div class="offcanvas offcanvas-end bg-black" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Carrito de Compras</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <?php
                    if(!isset($_SESSION['carrito']))
                    {
                    ?>
                        <p>Todav??a no agregaste productos</p>
                        <?php 
                    }
                    else
                    {?>


                        <p>Agregaste los siguientes productos:</p>
                        <ul class="list-group list-group-flush">
                            <?php
                        if(isset($_SESSION['carrito'])){
                            $carrito = $_SESSION['carrito'];

                            foreach($carrito as $producto)
                            {

                        
                    ?>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <?php echo($producto['cantidad']."x ".$producto['producto']); ?>

                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <?php 
                                        $precio = $producto['cantidad'] * $producto['precio'];
                                    
                                        echo(" $".$precio); ?>


                                        <a class="text text-danger"
                                            href="eliminarProducto.php?id=<?php echo($producto['id']); ?>"> <i
                                                class="bi bi-trash"></i></a>
                                    </div>
                                </div>
                            </li>

                            <?php
                        }
                    }
                    ?>
                        </ul>
                        <div class="row py-3">
                            <div class="col">
                                <p>Total:</p>

                            </div>
                            <div class="col d-flex justify-content-end">
                                <?php
                              $carrito = $_SESSION['carrito'];
                              $total = 0;
                              foreach($carrito as $producto)
                              { $total = $total +  (intval($producto['cantidad']) * doubleval($producto['precio'])); }
                            ?>
                                <p>$ <?php echo($total); ?></p>
                            </div>

                        </div>
                        <form action="terminarCompra.php">
                            <button type="submit" class="btn btn-primary ">Terminar compra</button>
                        </form>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <div class="card-group ">
            <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center">



                <?php 
            $host = "127.0.0.1:3306";
            $user = "root";
            $password = "";
            $db = "catalogo";
            $link =  mysqli_connect($host,$user,$password) or die("Ups.. Hubo un problema devolviendo la informacion solicitada :(");
            mysqli_select_db($link,$db); 
            $tabla=mysqli_query($link,"select * from catalogo");
            mysqli_close($link); 
        
            if (sizeof(mysqli_fetch_array($tabla)) > 0  ){
                $bandera = True;
            
                $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
                $total = $tabla->num_rows;
                $limit = 10;
                $cantPage = ceil($total / $limit);
                $start =  ($page - 1) * $limit;
            
                $limitQuery = "LIMIT $start,$limit";
             
                $link =  mysqli_connect($host,$user,$password) or die("Ups.. Hubo un problema devolviendo la informacion solicitada :(");
                mysqli_select_db($link,$db); 
                $tabla=mysqli_query($link,"select * from catalogo ".$limitQuery );
                mysqli_close($link); 
             
             while ($filas = mysqli_fetch_array($tabla))
             {

            ?>

                <div class="card text-bg-dark mb-3 mx-1" style="max-width: 12rem;">
                    <form action="agregarProducto.php?id=<?php echo($filas['id']); ?>" method="post">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo($filas['producto']); ?></h5>
                            <p class="card-text text-center fs-3 ">$<?php echo($filas['precio']); ?></p>
                            <div class="card-footer bg-transparent d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary"
                                    title="agregar <?php echo($filas['producto']); ?> al carrito">Agregar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
             }
             
     
             
            

            ?>


            </div>
           
        </div>
        <div class="d-flex justify-content-center  mt-3">

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

</div>
<?php
}

?>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

</html>