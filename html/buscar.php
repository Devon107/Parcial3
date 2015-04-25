<?php
		include("../php/conexion.php");

		if(isset($_POST["boton"]))
		{	
		$btn = $_POST["nombre"];
		if(!empty($btn))
		{
		$nombre = $_POST["nombre"];	
		$query = "select Carnet, Nombre, Carrera, Especialidad, Universidad, DUI,Responsable from datos where Nombre like '%$nombre%'";
		$resultado = mysqli_query($link,$query);
		
		//Imprimir resultados:
		?>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<body class="back">
	<table align='center' border='1'>
		<tr bgcolor='#66CCFF'><th>Carnet</th><th>Nombre</th><th>Carrera</th><th>Especialidad</th><th>Universidad</th><th>DUI</th><th>Responsable</th></tr>
		<?php
			while($registros = mysqli_fetch_array($resultado))
			{
				?>
				<tr>
				<?php
					for($i=0; $i<mysqli_num_fields($resultado); $i++)
					{
						?><td><?php echo $registros[$i] ?></td>
						<?php
					}
					?>
				</tr>
				<?php
			}
		echo $registros["nombre"];
		}
		?>
		</table>
		<div class='enlace'>
			<a href='buscar.php' class=enlace>Volver a buscar</a>
			</div>
			</body>
<?php
		} else {
		?>
		<html>
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
				<style type="text/css">
				body {
		}
				body,td,th {
			font-family: "Courier New", Courier, monospace;
			color: #000;
			font-weight: bold;
		}
				</style>
				<title>Buscar info</title>
			</head>
			<body class='back'>
				<div class="cajabusqueda" align="center">
				<legend>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="home.php">HOME</a></legend>
					<form action="buscar.php" method="post">

						<label>
						Nombre:
						</label>		
						<input type="text" id="nombre" name="nombre" autofocus placeholder="Escriba aquí" required>
					  <input type="submit" name="boton" id="boton" value="Enviar" class="boton">
					</form>

				</div>
			</body>
		</html>
<?php
}
?>