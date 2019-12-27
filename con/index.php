<?php
include_once("Caja.php");
include_once("Auto.php");
include_once("Bici.php");

$miCaja = new Caja();
$tuCaja = new Caja();
$bmw = new Auto();
$audi = new Auto();
$miBicicleta = new Bici();
$tuBicicleta = new Bici();

$tuCaja->guardar($tuBicicleta);
$tuCaja->guardar($audi);

$miCaja->guardar($tuCaja);

$miCaja->guardar($bmw);
$miCaja->guardar($miBicicleta);

$miCaja->mostrar();