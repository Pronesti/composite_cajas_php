<?php
include_once("MostrarConCapacidad.php");
Class Bici implements MostrarConCapacidad{
    private $nombre;
    private $capacidad;
    public function __construct($nombre, $capacidad)
    {
        $this->nombre = $nombre;
        $this->capacidad = $capacidad;
    }
    public function mostrar(){
        return $this->nombre . "(" . $this->getCapacidad() . ") \n";
    }
    public function getCapacidad(){
        return $this->capacidad;
    }
}