<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Registro Participantes</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div>
<form method="post" action="asistentes.php" name="asistentes">

<table>

<tr><td align="center" style="background-color:#33A8DB;"><label>Registrar Asistentes</label></td></tr>
<tr><td><input type="text" name="nombre" placeholder="&#9000; Ingresar Nombres" required /></td></tr>
<tr><td><input type="text" name="apellido" placeholder="&#9000; Ingresar Apellidos" required /> </td></tr>
<tr><td><input type="text" name="edad" placeholder="&#9000; Ingresar Edad" required /> </td></tr>
<tr><td><input type="text" name="sexo" placeholder="&#9000; Ingresar Sexo" required /> </td></tr>
<tr><td><input type="text" name="correo" placeholder="&#9000; Ingresar Email" required /> </td></tr>
<tr><td><input type="submit" value="Registrar" name="btnregisasis"/> </td></tr>
<br>
<tr><td><a href="menu.php" style="float:right">Ir a Menu</a></td></tr>
</table>

</form>
</div>
</body>
</html>

<?php
include('conexion.php');

session_start();

if(isset($_POST["btnregisasis"]))
{

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$correo = $_POST["correo"];


	$sqlgrabar = "INSERT INTO participantes (nombre,apellido,edad,sexo,correo) values ('$nombre','$apellido','$edad','$sexo','$correo')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Asistente registrado con exito: $nombre,$apellido'); window.location='menu.php' </script>";
	}else 
	{
		echo "Error: ".$conn->close();
        
        
	}
} 
?>