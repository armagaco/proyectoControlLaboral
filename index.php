<?php
session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Ingresar</title>
		<meta name= "viewport" content= "width = device-width, initial-escale=1.0">
		<meta http-equiv= "Content-Type" content= "text/html; charset=UTF-8" />
		<link rel= "stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel= "stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
		<div class="jumbotron boxlogin" >
                  <img src="images/logo.png" alt="JARE Solutions" title="JARE Soluions" style="width:279px;height:47px;">

<?php

 if (isset($_SESSION['Salmeron'])){
   echo"<p> Bienvenido Usuario:(" . $_SESSION['Salmeron']. ") [<a href='logout.php'>Salir</a>]";
}
else{
}
?>

			<form action="login.php" method="POST" name = "flogin" id = "flogin">
				<label>Nombre de Usuario:</label>
				<input type="text" name="username" id = "username" class="form-control">
				<label>Contraseña:</label>
				<input type="text" name="password" id="password" class="form-control">
				<!--<input type="submit" class="btn btn-success" value="Conectarse">-->
				
				<a href= "principal.html" class="btn btn-success" role = "button"> Conectarse </a>
			</form>
		</div>

	</body>
</html>