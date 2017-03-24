15 - Clases abstractas y concretas.<br>
(Ver qué error produce)<br>

<?php

abstract class Persona {
    
    protected $nombre;
    protected $edad;
    
    public function cargar($n, $e) {
        $this->edad=$e;
        $this->nombre=$n;
    }
    
    public function imprimir (){
        echo ("Nombre: ".$this->nombre.". Edad: ".$this->edad."<br>");
    }
}

class Empleado extends Persona {
    protected $sueldo;
    
    public function cargarSueldo($s){
        $this->sueldo=$s;
    }
   
   public function imprimirSueldo (){
        echo ("Sueldo: ".$this->sueldo."<br>");
    }
}

$persona1 = new Persona();
$persona1->cargar("Lidia", "28");
$persona1->imprimir();

$empleado1 = new Empleado();
$empleado1->cargar("Rosa", "34");
$empleado1->cargarSueldo("1700");
$empleado1->imprimirSueldo();

?>
