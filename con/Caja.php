<?php
include_once("Mostrar.php");
Class Caja implements Mostrar{
    private $contenido = array();

    public function guardar(Mostrar $obj){
        $this->contenido[] = $obj;
    }

    public function mostrar(){
        echo "Caja: \n";
        foreach($this->contenido as $v){
            print("-" . $v->mostrar() . "\n");
        }
    }
}