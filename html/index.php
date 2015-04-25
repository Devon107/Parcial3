<?php
	session_start();
if (!isset($_SESSION["usuario"]))
{
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Parcial 3</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script src="../js/jquery.js" language="javascript"></script>
	</head>
	<body class='back'>
	<form action="../php/control.php" method="post" id="form"><br>
	<div class='container well'>
	
		Usuario:
		<input type="text" name="usuario" required id="usuario" />

		Clave:
		<input type="password" name="clave" onkeyup="validarform();" required id="clave" />
		<input type="submit" name="button" id="button" value="Entrar">
		<label id='div' style='color:#FFFFFF; background-color:#0000FF;'></label>
	</div>
	</form>
	<script type="text/javascript">
        function validarform(){
                var clave = $("#clave").val();

               if(clave.length < 8){
               		$("#div").html("");
               		 $("#div").fadeOut();
                    
                }
                else{
                  	$("#div").html("Su clave debe contener minimo 8 caracteres maximo 15");
               		$('#div').fadein("slow");
               		return false;
                   
                    }
        };
	</script>
	</body>
	</html>
<?php
}
else{
	header('Location: home.php');
}
?>
