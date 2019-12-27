<?php
Class Caja{
    private $contenido = array();

    public function guardar($obj){
        $this->contenido[] = $obj;
    }

    public function mostrar(){
        foreach($this->contenido as $v){
            if($v instanceof Caja){
                echo "Caja: \n";
                $v->mostrar();
                echo "\n";
            }elseif($v instanceof Bici || $v instanceof Auto){
                echo $v->nombre;
                echo "\n";
            }else{
                echo $v;
            }
        }
    }
}