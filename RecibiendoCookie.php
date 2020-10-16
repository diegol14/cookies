<?php
$usuario=$_POST["nombre_usuario"];
$contrasenha=$_POST["contrasenha"];

setcookie('usuario', $usuario,time()+4800);
setcookie('contrasenha', $contrasenha,time()+4800);

if (isset($_COOKIE["usuario"])){
    echo "Hola usuario " .$_COOKIE["usuario"]."</br>";
}else { echo "No hay cookie usuario</br>";}

if (isset($_COOKIE["contrasenha"])){
    echo "Hola usuario " .$_COOKIE["contrasenha"]."</br>";
}else { echo "No hay cookie contraseña</br>";}
?>
<!DOCTYPE html>
<html>
<head>
<title>'Recibiendo cookies'</title>
</head>
<body>
<a href="SalirYBorrarCookie.php">Salir del sistema</a>
</body>
</html>

