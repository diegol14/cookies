<?php
if (isset($_COOKIE['usuario'])) {
    echo 'hay cookie de usuario con valor'.
        $_COOKIE['usuario'].'<br>';}
    
    else {
        echo 'no hay nombre de usuario guardado'.'</br>';}
    
    
    if (isset($_COOKIE['contrasenha'])) {
        echo 'hay cookie de contrase�a con valor'.
            $_COOKIE['contrasenha'];
    }
   
       
        else {
            echo 'no hay contrase�a guardada';
        }
        ?>