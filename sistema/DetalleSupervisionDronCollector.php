<?php

include_once('detallesupervisiondron.php');
include_once('Collector.php');

class DetalleSupervisionDronCollector extends Collector
{
  
  function showDetalleSupervisionDron() {
    $rows = self::$db->getRows("SELECT idcabeceradron, iddetalledron, idempleado, idlabor,cantidad,tarifa, imagen FROM controlAgricola.detallesupervisiondron order by idcabeceradron,iddetalledron ");        
    $arraydetallesupervisiondron= array();        
    foreach ($rows as $c){
      $aux = new detallesupervisiondron($c{'idempleado'},$c{'tarifa'},$c{'iddetalledron'},$c{'idlabor'},$c{'cantidad'},$c{'imagen'});
      array_push($arraydetallesupervisiondron, $aux);
    }
    return $arraydetallesupervisiondron;        
  }
  function deleteDetalleSupervisionDron($id, $idCabecera) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.detallesupervisiondron where iddetalledron = $id and tarifa= '$idCabecera'", null);             
  }

function insertDetalleSupervisionDron($idCabecera, $id, $idempleado, $idlabor, $cantidad, $tarifa, $imagen) {
    $rows = self::$db->insertRow("Insert into controlAgricola.detallesupervisiondron (idcabeceradron, iddetalledron, idempleado, idlabor,cantidad,tarifa, imagen) values ('$idCabecera', '$id', '$idempleado', '$idlabor', '$cantidad', '$tarifa', '$imagen' )" , null);             
  }

function updateDetalleSupervisionDron($tarifa, $id, $idlabor, $cantidad, $imagen) {
    $rows = self::$db->updateRow("Update controlAgricola.detallesupervisiondron set idlabor = '$idlabor', cantidad = '$cantidad', imagen = '$imagen' where iddetalledron =$id and tarifa= '$tarifa'", null);             
  }

}
?>
