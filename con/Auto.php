<?php
include_once("Mostrar.php");
Class Auto implements Mostrar{
    public $nombre = "Automovil";

    public function mostrar(){
        return $this->nombre;
    }
}