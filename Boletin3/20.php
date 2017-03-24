21 - Método destructor de una clase (__destruct)<br><br>


<?php

class Clase {
  public function __construct()
  {
    echo 'Se ha ejecutado el constructor<br>';
  }
  public function __destruct()
  {
    echo 'Se ha ejecutado el destructor<br>';
  }
}
$v=new Clase();

?>