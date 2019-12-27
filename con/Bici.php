<?php
include_once("Mostrar.php");
Class Bici implements Mostrar{
    public $nombre = "Bicicleta";
    public function mostrar(){
        return $this->nombre;
    }
}