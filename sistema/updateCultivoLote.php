<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Menú</title>
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
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla CultivoLotes</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createCultivoLote.php'>Nuevo</a></li>";
			echo "<li><a href='readCultivoLote.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

	$i =$_GET['idcultivolote'];
	$p =$_GET['idperiodo'];
	$l =$_GET['idlote'];
	$c =$_GET['idcultivo'];
	$f =$_GET['fecha'];
	$e =$_GET['estado'];

?>

<form method= "POST" class="form-horizontal" action= "saveCultivoLote.php?usuario=" >
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">CultivoLote:</label>
         <div class="col-xs-10">
             <input name = "Cultivolote" type="text" id= "Cultivolote" class="form-control" placeholder="Cultivolote" value="<?php echo $i;?>" readonly>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Periodo:</label>
         <div class="col-xs-10">
             <input name = "Periodo" type="text" id= "Periodo" class="form-control" placeholder="Periodo" value="<?php echo $p;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Lote:</label>
         <div class="col-xs-10">
             <input name = "Lote" type="text" id= "Lote" class="form-control" placeholder="Lote" value="<?php echo $l;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Cultivo:</label>
         <div class="col-xs-10">
             <input name = "Cultivo" type="text" id= "Cultivo" class="form-control" placeholder="Cultivo" value="<?php echo $c;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Fecha:</label>
         <div class="col-xs-10">
             <input name = "Fecha" type="text" id= "Fecha" class="form-control" placeholder="Fecha" value="<?php echo $f;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Estado:</label>
         <div class="col-xs-10">
             <input name = "Estado" type="text" id= "Estado" class="form-control" placeholder="Estado" value="<?php echo $e;?>">
         </div>
     </div>
     <div class="form-group">
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Grabar</button>
         </div>
     </div>
</form>



	</body>
</html>


