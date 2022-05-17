<?php

if (!empty($_POST)) 
{
  if (  !empty($_POST['username_2']) 
        && !empty($_POST['email_2']) 
 
    ) 
 
    $subject = "Te recomendaron esta página :)";
    $mensaje = "Tu amigo ".$_POST['username_2']."te recomendo esta pagina www.mendiburufrancisco.github.io"   ;
    
    mail( $_POST['email_2'],
          $subject,
          $mensaje 
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