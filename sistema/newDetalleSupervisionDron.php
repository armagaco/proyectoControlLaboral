<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Nuevo Supervision-Dron</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet" >
        <link href="../css/tablas.css" rel="stylesheet" >
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Supervision-Dron</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createDetalleSupervisionDron.php'>Nuevo</a></li>";
			echo "<li><a href='readDetalleSupervisionDron.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";


$ca = $_POST['CabeceraDron'];
$id = $_POST['DetalleDron'];
$e = $_POST['Empleado'];
$l = $_POST['Labor'];
$c = $_POST['Cantidad'];
$a = $_POST['Tarifa'];
$i = null;



include_once("DetalleSupervisionDronCollector.php");
$DetalleSupervisionDronCollectorObj = new DetalleSupervisionDronCollector();
$DetalleSupervisionDronCollectorObj->insertDetalleSupervisionDron($ca,$id,$e,$l,$c,$a,$i);

echo "<br>";

echo "<div class='container'>";
echo "  <h2>Detalle Dron</h2>";
echo "  <div class='panel panel-default'>";
echo "    <div class='panel-heading'>Registro Ingresado Correctamente</div>";
echo "    <div class='panel-body'>$l</div>";
echo "  </div>";
echo "</div>";

?>

</body>
</html>
