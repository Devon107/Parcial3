<?php 

    include("../php/conexion.php");
	session_start();
if (isset($_SESSION["usuario"]))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parcial 3</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/validar.js"></script>
	<script src="../js/jquery.js" language="javascript"></script>
</head>
<body class='back'>
<div class='container'>
<fieldset>
	<legend>Bienvenido &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="../php/salir.php">SALIR</a></legend> 
</fieldset>
<form>
<?php
		$conn=mysqli_connect("localhost", "root", "");
		mysqli_select_db($conn, "registro");
		$sq = "SELECT cargo FROM usuario where usuario='".$_SESSION["usuario"]."'";
		$re = mysqli_query($conn, $sq);
		$resultado=mysqli_fetch_array($re);
		$cargo=$resultado["cargo"];

			if($cargo=='1')
			{
?>	
<div class="opciones">
<a href="Registro_Alumno.php"><img src="../img/pages_brown.png" alt="Registrar Alumno">Registrar Alumno</a>
</div>

<?php
		}
?>	
<div class="opciones">
<a href="buscar.php"><img src="../img/My Documents.png" alt="Generar listado">Generar listado</a>
</div>
</form>
</div>
</body>
</html>
<?php
}
else{
	header('Location: index.php');
}
?>