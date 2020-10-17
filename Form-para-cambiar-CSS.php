<?php
?>
<html lang="es" >
	<head>
    <meta charset="utf-8 sin bom" />
    <title>Cambiando el CSS con  Cookies</title>
	</head>

	<body>
		<form action="CambiandoCSS.php"
          method="post" name="datos_CSS" id="datos_CSS">
        <p><label>Elige el color de tu fondo </label></p>
       <select name="BckgrndColor" id="BckgrndColor">
       	<option value="blue">Azul</option>
       	<option value="red">Rojo</option>
       	<option value="grey">Gris</option>
       	<option value="yellow">Amarillo</option>
<<<<<<< HEAD
        <option value="pink">Rosado</option>
=======
        <option value="green">Verde</option>
>>>>>>> form-para-cambiar-css
       </select>
       
       
        <p><label>Elige el tamaño de la letra </label></p>
       <select name="Fntsize" id="Fntsize">
       	<option value="small">Pequeña</option>
       	<option value="medium">Mediana</option>
       	<option value="large">Grande</option>
       	<option value="x-large">ExtraGrande</option>
       </select>
       <p></p>
       <table>
        <tr>
         <td colspan="2" align="center"><input type="submit" name="CambiarCSS" id="CambiarCSS"value="CambiarCSS"></td>
        </tr></table>
        </form>
	</body>
</html>
