
<link rel="stylesheet" href="style.css">

<table>
<?php
include('conexion.php');
session_start();

if(isset($_SESSION['email']))
{
	$usuarioingresado = $_SESSION['email'];
	echo "<tr><td colspan='2' align='center'><h1>Bienvenido: $usuarioingresado </h1></td></tr>";
}
else
{
	header('location: menu.php');
}
?>
<form method="POST">
<tr><td colspan='2' align="center"><input type="submit" value="Cerrar sesión" name="btncerrar" /></td></tr>
</form>

<tr><td colspan="2"><h1>MENU</h1></td></tr>


<tr><td><a href="asistentes.php" style="float:none">REGISTRAR ASISTENTES</a></td></tr>
<tr><td><a href="listadoasistentes.php" style="float:none">ASISTENTES REGISTRADOS</a></td></tr>


<?php 

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: index.php');
} 


?>
</table>