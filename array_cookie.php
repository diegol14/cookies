<?php
$persona = array("Pedro", "Sebastian", "60", "Madrid","12345");

setcookie("persona[nombre]", $persona[0],time()+3600,"/");
setcookie("persona[apellido]", $persona[1],time()+3600,"/");
setcookie("persona[edad]", $persona[2],time()+3600,"/");
setcookie("persona[ciudad]", $persona[3],time()+3600,"/");
setcookie("persona[password]", $persona[4],time()+3600,"/");

if (isset($_COOKIE['persona']['nombre']) and isset($_COOKIE["persona"]["apellido"])) {
    echo "Hola, ". $_COOKIE['persona']['nombre']." ".$_COOKIE["persona"]['apellido'] ;
}
else {
    echo "Hola usuario desconocido";
}

 if (isset($_COOKIE["persona"]['edad']) or isset($_COOKIE["persona"]["ciudad"])) {
    echo "</br>Tienes  ". $_COOKIE["persona"]['edad']." años "."
 y vives en ".$_COOKIE["persona"]['ciudad']
    ;
}
else {
    echo "</br>no sabemos tu edad ni donde vives";
}

if (isset($_COOKIE["persona"]["password"])) {
    echo "</br>Tu password es ".$_COOKIE["persona"]["password"]
    ;
}
?>