?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Guardar Supervision-Dron</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet" >
        <link href="../css/tablas.css" rel="stylesheet" >
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
	<script src= "../js/jquery.js" ></script>
	<script src="../js/jquery.bootgrid.min.js"></script>
	<script src="../js/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Supervision-Dron</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createCabeceraSupervisionDron.php'>Nuevo</a></li>";
			echo "<li><a href='readCabeceraSupervisionDron.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

$id =$_POST['Codigo'];
$p =$_POST['Periodo'];
$f =$_POST['Fecha'];
$c =$_POST['Cultivo'];
$s =$_POST['Supervisor'];
$a =$_POST['Estado'];
$v =$_POST['Valor'];

echo "id= $id, periodo = $p, fecha = $f, cultivo = $c, supervisor = $s, estado = $a, valor = $v";


include_once("CabeceraSupervisionDronCollector.php");
$CabeceraSupervisionDronCollectorObj = new CabeceraSupervisionDronCollector();
$CabeceraSupervisionDronCollectorObj->updateCabeceraSupervisionDron($id,$p,$c,$f,$s,$a,$v);

echo "<br>";

echo "<div class='container'>";
echo "  <h2>Cabecera Supervision-Dron</h2>";
echo "  <div class='panel panel-default'>";
echo "    <div class='panel-heading'>Registro Actualizado Correctamente</div>";
echo "    <div class='panel-body'>$f</div>";
echo "  </div>";
echo "</div>";
 
?>

</body>
</html>
