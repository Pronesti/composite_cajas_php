<?php
include_once("Mostrar.php");
include_once("Capacidad.php");
Interface MostrarConCapacidad extends Mostrar,Capacidad{
    public function mostrar();
    public function getCapacidad();
}