<?php
include_once("MostrarConCapacidad.php");
Class Caja implements MostrarConCapacidad{
    private $contenido = array();
    private $capacidadGuardado;
    private $pesoDeLaCaja;

    public function __construct($capacidadGuardado, $pesoDeLaCaja)
    {
        $this->capacidadGuardado = $capacidadGuardado;
        $this->pesoDeLaCaja = $pesoDeLaCaja;
    }

    public function guardar(MostrarConCapacidad $obj){
        if ($this->getCapacidadGuardado() - $this->getCapacidad() - $obj->getCapacidad() >= 0){
            $this->contenido[] = $obj;
        }
    }

    public function mostrar(){
        echo "Caja(" . $this->getStatus() . "): \n";
        foreach($this->contenido as $v){
            echo $v->mostrar();
        }
    }

    public function getCapacidad(){
        $total = 0;
        foreach($this->contenido as $v){
            $total = $total + $v->getCapacidad();
        }
        return $total + $this->pesoDeLaCaja;
    }

    public function getCapacidadGuardado(){
        return $this->capacidadGuardado;
    }

    public function getStatus(){
        return $this->getCapacidad() . "/" . $this->getCapacidadGuardado();
    }
}