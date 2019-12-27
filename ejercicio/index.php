<?php
include_once("Caja.php");
include_once("Auto.php");
include_once("Bici.php");

$miCaja = new Caja(15,3);
$tuBicicleta = new Bici("FAST", 2);
$audi = new Auto("AUDI", 5);
$tuCaja = new Caja(10,1);
$bmw = new Auto("BMW", 5);
$miBicicleta = new Bici("PIRULIN", 2);

$tuCaja->guardar($tuBicicleta);
$tuCaja->guardar($audi);
$miCaja->guardar($miBicicleta); 
$miCaja->guardar($tuCaja);
$miCaja->guardar($bmw); //Ya no entra
//$miCaja->guardar("holis");

$miCaja->mostrar();
print("\nCapacidad de la Caja 1:" . $miCaja->getStatus() . "\n");