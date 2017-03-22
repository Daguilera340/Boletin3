5 - Método constructor de una clase (__construct) <br><br>

<?php
class CabeceraPagina{
 private $titulo;
 private $align;
 private $fondo;
 private $fuente;
 
 public function __construct($t, $a, $fon, $fu) {  
    $this->titulo=$t;
    $this->align=$a;
    $this->fondo=$fon;
    $this->fuente=$fu;
 }
 
 public function mostrar()
 {
 echo '<div style="font-size:40px;text-align:'.$this->align.';font-family:'.$this->fuente.';background-color:'.$this->fondo.'">';
 echo $this->titulo;
 echo '</div>';
 }
}
$cab=new CabeceraPagina('El blog de la programadora','center', 'purple', 'arial');
$cab->mostrar(); 

?>