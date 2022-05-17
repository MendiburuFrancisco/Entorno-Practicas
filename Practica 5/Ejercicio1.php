<?php

if (!empty($_POST)) 
{
  if (  !empty($_POST['username']) 
        && !empty($_POST['email']) 
        && !empty($_POST['emailMessage'])
        && !empty($_POST['emailSubject'])
        
    ) 
 
    
    mail( 
        $_POST['email'], 
        $_POST['emailSubject'],
          $_POST['username'].": ".$_POST['emailMessage'] 
        );
    
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.php' \",1)</script>"; 
} 
else
{
    echo "<script>alert('hubo un error al enviar el mail')</script>";  
    echo "<script> setTimeout(\"location.href='index.php' \",1)</script>"; 
}
 

?>