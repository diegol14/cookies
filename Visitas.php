<?php
// comprobamos si cookie visita existe
if (isset($_COOKIE['contador_visita'])) {
    setcookie('contador_visita',$_COOKIE['contador_visita']+1);
    echo "</br>Hola de nuevo!, es tu visita " . $_COOKIE['contador_visita'] . "</br>";
        } else {
    setcookie('contador_visita', 1, time() +365*24*60*60);
    echo "Bienvenido!</br>";
}
// código para guardar la fecha de la ultima visita
$ahora = date('d/m/Y | H:i:s');

if (isset($_COOKIE['timeVisit'])) {
    echo "Nos visitaste " . $_COOKIE['timeVisit'];
} 
else {
    echo "No existe un registro de tu ultima visita";
}
setcookie('timeVisit', $ahora, time() + 365 * 24 * 60 * 60);
?>
<html>
<head>
<title>Visitas</title>
</head>
<body></body>
</html>