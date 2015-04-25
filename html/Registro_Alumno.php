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
	<legend>Ingresar Nuevo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="home.php">HOME</a></legend> 
</fieldset>
	<form action="../php/ingresonuevo.php" method="POST" id="form1" accept-charset="utf-8">
		<table>
			<tr>
				<td>Carnet</td>
				<td><input type="text" id="Carnet" name="carnet" required onkeyup="validarform();" placeholder="SD050158" pattern="[a-zA-ZáéíóúÁÉÍÓÚ]{2}[0-9]{6}" maxlength="8"><label id='div' style='color:#FFFFFF; background-color:#0000FF;'></label></td>
			</tr>
			<tr>
				<td>Nombre Completo</td>
				<td><input type="text" id="Nombre" name="nombre" placeholder="Juan Bolaños" pattern="[a-zA-ZáéíóúÁÉÍÓÚ]++(\s*[a-zA-ZáéíóúÁÉÍÓÚ]*)+$"></td>
			</tr>
			<tr>
				<td>Carrera</td>
				<td><input type="text" id="Carrera" name="carrera" required placeholder="Ingenieria" pattern="[a-zA-ZáéíóúÁÉÍÓÚ]+"></td>
			</tr>
			<tr>
				<td>Especialidad</td>
				<td><input type="text" id="Esp" name="especialidad" required placeholder="Computación" pattern"[a-zA-ZáéíóúÁÉÍÓÚ]++(\s*[a-zA-ZáéíóúÁÉÍÓÚ]*)+$"></td>
			</tr>
			<tr>
				<td>Universidad</td>
				<td><input type="text" id="U" name="universidad" placeholder="Don Bosco" pattern="[a-zA-ZáéíóúÁÉÍÓÚ]++(\s*[a-zA-ZáéíóúÁÉÍÓÚ]*)+$"></td>
			</tr>
			<tr>
				<td>DUI</td>
				<td><input type="text" id="DUI" name="dui"  placeholder="47956321-3" required pattern="[0-9]{8}-[0-9]{1}" onkeyup="mascara(this,'-',sep3,true);" ></td>
			</tr>
			<tr>
				<td>Edad</td>
				<td><input type="number" id="edad" name="edad" min="18" max="80" onkeyup="validarform();" value="18" pattern="[0-9]+"></td>
			</tr>
			<tr>
				<td>Responsable</td>
				<td><input type="text" id="Resp" name="responsable" placeholder="Raul Bolaños" pattern="[a-zA-ZáéíóúÁÉÍÓÚ]++(\s*[a-zA-ZáéíóúÁÉÍÓÚ]*)+$"></td>
			</tr>
			<tr>
				<td>Nombre de Usuario</td>
				<td><input type="text" name="usuario" placeholder="" ></td>
			</tr>
			<tr>
				<td>Clave</td>
				<td><input type="text" name="clave" placeholder="" ></td>
			</tr>
			<tr>

				<td>Administrador:</td>
				<td>
					<input type="checkbox" name="estado" value="True"> Activo<br>
			   </td>
			</tr>
			<tr>
				<td><input type="submit" id="boton" value="Registrar" name="boton"></td>
				<td><input type="reset" value="Limpiar" id="reset" ></td>
			</tr>
		</table>
		
	</form>
	</div>
	<script type="text/javascript">
        var expr = /^[a-zA-Z]{2}[0-9]{6}$/;
        function validarform(){
                var carnet = $("#Carnet").val();

               if(carnet == "" || !expr.test(carnet)){
               		$("#div").html("Debe ingresar un Carnet");
               		$('#div').fadein("slow");
                    return false;
                }
                else{
                    $("#div").html("");
                    $("#div").fadeOut();
                    }
        };
    </script>
</body>
</html>
<?php
}
else{
	header('Location: index.php');
}
?>