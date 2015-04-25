<?php 

    include("conexion.php");

	if(isset($_POST["boton"]))
	{
		$carnet = $_POST["carnet"];
		$nombre = $_POST["nombre"];
		$carrera = $_POST["carrera"];
		$especialidad = $_POST["especialidad"];
		$universidad = $_POST["universidad"];
		$dui = $_POST["dui"];
		$edad = $_POST["edad"];		
		$clave = $_POST["clave"];
		$nclave=md5($clave);
		$usuario = $_POST["usuario"];
		$responsable = $_POST["responsable"];
		$cont=false;
		if(isset( $_POST["estado"])) 
		{
				$estado = True;
		}
		else
		{
				$estado = False;
		}  

		$sql="SELECT carnet from datos where carnet='%$carnet%'";
		$res= mysqli_query($link, $sql);
		while($r=mysqli_fetch_array($res))
		{
			if($r['carnet']=$carnet)
			{
				$cont=true;
			}
		}
		if($cont)
		{
			$cont=false;
			echo "<script>alert('Carnet ya existe');</script>";
		}
		else
		{
				$sql = "INSERT INTO datos (carnet,nombre, carrera,especialidad,universidad,dui,edad,responsable) VALUES ('$carnet', '$nombre', '$carrera','$especialidad','$universidad','$dui','$edad','$responsable');";
				$re = mysqli_query($link, $sql);
				
				if($re)
				{	$sql = "INSERT INTO usuario (id_datos,usuario ,clave, estado) VALUES ('$carnet','$usuario','$nclave', '$estado');";
					$res = mysqli_query($link, $sql);
					if($res)
					echo "<script>alert('Insertado Correctamente');</script>";
				}
				else{
					echo "<script>alert('Error al insertar');</script>";
					}
				echo "<script>window.location='../html/Registro_Alumno.php'</script>";
			}
	}

?>