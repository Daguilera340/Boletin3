19 - función __clone()<br><br>

<?php

class Persona {
  private $nombre;
  private $edad;
  
  public function __construct ($n,$e)
  {
    $this->nombre=$n;
    $this->edad=$e;
  }
  
  public function __clone()
  {
    $this->edad++;
  }
  
  public function mostrar(){
      echo 'Nombre; '.$this->nombre.'. Edad: '.$this->edad.'<br>';
  }
}

$persona1=new Persona("Silvia", "40");
$persona1->mostrar();
$persona2=clone($persona1);
$persona2->mostrar();

?>