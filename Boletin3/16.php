17 - Métodos y clases final.<br><br>

<?php

class Persona {
  protected $nombre;
  protected $edad;
  
  public final function cargar($n,$e)
  {
    $this->nombre=$n;
    $this->edad=$e;
  }
  public function imprimir()
  {
    echo ('Nombre: '.$this->nombre.'<br>');
    echo ('Edad: '.$this->edad.'<br>');
  }
}

final class Empleado extends Persona{
  protected $sueldo;
  public function cargarSueldo($s)
  {
    $this->sueldo=$s;
  }
  public function imprimirSueldo()
  {
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}

$persona1=new Persona();
$persona1->cargar('Pedro',34);
$persona1->imprimir();

$empleado1=New Empleado();
$empleado1->cargar('Federico',38);
$empleado1->cargarSueldo(980);
$empleado1->imprimir();
$empleado1->imprimirSueldo();
?>
