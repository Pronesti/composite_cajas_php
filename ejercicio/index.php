<?php
include_once("Caja.php");
include_once("Auto.php");
include_once("Bici.php");

$miCaja = new Caja(10,1);
$tuCaja = new Caja(10,1);
$bmw = new Auto("BMW", 5);
$audi = new Auto("AUDI", 5);
$miBicicleta = new Bici("PIRULIN", 2);
$tuBicicleta = new Bici("FAST", 2);

$tuCaja->guardar($tuBicicleta);
$tuCaja->guardar($audi);
$miCaja->guardar($tuCaja);
$miCaja->guardar($bmw);
$miCaja->guardar($miBicicleta); //Ya no entra
//$miCaja->guardar("holis");

$miCaja->mostrar();