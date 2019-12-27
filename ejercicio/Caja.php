<?php
include_once("MostrarConCapacidad.php");
Class Caja implements MostrarConCapacidad{
    private $contenido = array();
    private $capacidadGuardado;
    private $capacidad;

    public function __construct($capacidadGuardado, $capacidad)
    {
        $this->capacidadGuardado = $capacidadGuardado;
        $this->capacidad = $capacidad;
    }

    public function guardar(MostrarConCapacidad $obj){
        if ($this->getCapacidadGuardado() - $obj->getCapacidad() >= 0){
            $this->contenido[] = $obj;
            $this->capacidadGuardado -= $obj->getCapacidad();
        }
    }

    public function mostrar(){
        foreach($this->contenido as $v){
            echo $v->mostrar();
        }
    }

    public function getCapacidad(){
        $total = 0;
        foreach($this->contenido as $v){
            $total = $total + $v->getCapacidad();
        }
        return $total;
    }

    public function getCapacidadGuardado(){
        return $this->capacidadGuardado;
    }
}