<?php
$bckgrndcolor='grey';
if (isset($_POST['BckgrndColor'])) { 
    $bckgrndcolor=$_POST['BckgrndColor'];
    setcookie('BckgrndColor', $bckgrndcolor, time()+ 6*30*24*60*60);
}
else {
    if (isset($_COOKIE['BckgrndColor'])) {
        $bckgrndcolor=$_COOKIE['BckgrndColor'];
    }
}

if (isset($_POST['Fntsize'])) {
    $Fntsize=$_POST['Fntsize'];
    setcookie('Fntsize', $Fntsize, time()+ 6*30*24*60*60);
}
else {
    if (isset($_COOKIE['Fntsize'])) {
        $Fntsize=$_COOKIE['Fntsize'];
    }
}
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Cambiando CSS con Cookies</title>
   
</head>
<body  <?php echo "style='background-color:$bckgrndcolor ;Font-size:$Fntsize;'"
    ?>
    <?php 
    echo $bckgrndcolor." ".$Fntsize;
    ?>>
    <h1>Primera Activate</h1>
    <h2>El padre</h2>
    <p>El padre de la Web, <strong>Tim Berners-Lee</strong>,<br/> es también el padre de HTML,<em> Hypertext Markup Languaje</em></p>
    <h2>La estandarizacion</h2>
    <p>El lenguaje HTML está estandarizado por el W3C, el <em>World Wide Web Consortium</em></p>

    <ol title="Campeones del Mundo">
        <li></li>

    </ol>

    <dl title="Acronimos">
        <dt>HTML</dt>
        <dd>Hypertext Markup Language</dd>
        <dt>HTTP </dt>
        <dd>HyperText Transfer Protocol</dd>
        <dt>URL</dt>
        <dd>Uniform Resource Locator</dd>
    </dl>
    <a href="https://uruguay-en-rusia2018-diegolpereira.blogspot.com/">Diegol en Rusia</a>
   
    <form action="/*C://wamp//www//Pildoras php//Formularios//ActivateNombreApellidos//*/ActivateNombreApellidos.php"
          method="post" name="datos_usuario" id="datos_usuario">
        <p><label>Nombre: <input type="text" name="nombre_usuario" id="nombre_usuario" /></label></p>
        <p><label>Apellidos: <input type="text" name="apellidos_usuario" id="apellidos_usuario" /></label></p>
        <table>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
        </tr>
        </table>
        </form>
</body>
</html>