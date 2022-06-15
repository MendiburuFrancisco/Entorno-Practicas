<?php



function abrirConexion()
{
    $host = "127.0.0.1:3306";
    $user = "root";
    $password = "";
    $link =  mysqli_connect($host,$user,$password) or die("Ups.. Hubo un problema devolviendo la informacion solicitada :(");
    // $mysqli =  new mysqli($host,$user,$password) or die("Ups.. Hubo un problema devolviendo la informacion solicitada :(");
    return $link;
}

function realizarQuery($nombreEsquema="capitales",$query)
{
    
    $link = abrirConexion();
    mysqli_select_db($link,$nombreEsquema); 
    $res = mysqli_query($link,$query) or die(mysqli_error($link));
    mysqli_close($link);   
    return $res;
}

function devolverUltimoID()
{
    $query = "SELECT max(id) as cantidad FROM ciudades";
    return realizarQuery('capitales',$query);
}

function devolverTabla($nombreTabla="ciudades",$where ="",$id ="",$nombreDB="capitales")
{
    $query = "SELECT * FROM ".$nombreTabla." ".$where." ".$id." ";
    return realizarQuery($nombreDB,$query);
    
}

function buscar($busqueda)
{
    $query = "SELECT * FROM ciudades WHERE CONCAT(id,' ',ciudad,' ',pais,' ',habitante,' ',superficie) LIKE '%".$busqueda."%'";
    return realizarQuery("capitales",$query);
}

function agregarCapital()
{
    
    if( !empty($_POST)  
    // if( !empty($_POST['nombre']) &&
    //     !empty($_POST['pais']) &&
    //     !empty($_POST['habitantes']) &&
    //     !empty($_POST['superficie']) &&
    //     !empty($_POST['tieneMetro']) 
    ){
        $vNombre = $_POST['nombre'];
        $vPais = $_POST['pais'];
        $vHabitantes = $_POST['habitantes'];
        $vSuperficie = $_POST['superficie'];
        $vTieneMetro = isset($_POST['tieneMetro']);
        $vTieneMetro = ($vTieneMetro)? 1 : 0;
        
        $ultimoID = mysqli_fetch_array(devolverUltimoID());
        $ultimoID = $ultimoID['cantidad'] + 1;
        $query = "INSERT INTO ciudades (id,ciudad,pais,habitante,superficie,tieneMetro) 
        VALUES(".$ultimoID.",'".$vNombre."','".$vPais."',".$vHabitantes.",".$vSuperficie.",".$vTieneMetro.")";
        
        try
        {
            $res = realizarQuery("capitales",$query);
            return True;

        }catch(Exeption $e)
        {
            throw $e;
            echo "<h1>Ups..ocurrio un error :(</h1>";
            return false;
        }

 
    }else
    {
        echo "<h1>Ups..ocurrio un error :(</h1>";
        return false;
    }

}

function modificarCapital()
{

    if( !empty($_POST)  
    // if( !empty($_POST['nombre']) &&
    //     !empty($_POST['pais']) &&
    //     !empty($_POST['habitantes']) &&
    //     !empty($_POST['superficie']) &&
    //     !empty($_POST['tieneMetro']) 
    ){
        $vNombre = $_POST['nombre'];
        $vPais = $_POST['pais'];
        $vHabitantes = $_POST['habitantes'];
        $vSuperficie = $_POST['superficie'];
        $vTieneMetro = isset($_POST['tieneMetro']);
        $vTieneMetro = ($vTieneMetro)? 1 : 0;
        
        $query = "UPDATE ciudades SET ciudad = '".$vNombre."', pais = '".$vPais."', habitante = ".$vHabitantes.", superficie = ".$vSuperficie.", tieneMetro = ".$vTieneMetro." WHERE id = ".$_GET['id'];
        try
        {
            $res = realizarQuery("capitales",$query);
            return True;

        }catch(Exeption $e)
        {
            throw $e;
            return false;
        }
    }
}

 

function eliminarCapital($id)
{
        if(mysqli_num_rows(devolverTabla("ciudades"," WHERE id = ",$id)) > 0)
        {
            $query = "DELETE FROM ciudades WHERE id =".$id;
            $res = realizarQuery('capitales',$query);
     
            return True;
        }
        else
        {
            return False;
        }
    
}
    
 
?>
