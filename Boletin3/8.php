9 - Parámetros de tipo objeto.<br><br>
  
<?php
class Celda {
    
    public $texto;
    public $colorFuente;
    public $colorFondo;
    
    function __construct($text, $cFuente, $cFondo) {
        $this->colorFondo=$cFondo;
        $this->colorFuente=$cFuente;
        $this->texto=$text;
    }
    
}

class Tabla {

 private $celdas=array();
 private $filas;
 private $columnas;
 
 public function __construct($fila,$columna)
 {
    $this->filas=$fila;
    $this->columnas=$columna;
 }
 
 public function cargar($filas, $columnas, $text,$cFuente,$cFondo)
 {
    $this->celdas[$filas][$columnas]=new Celda($text,$cFuente,$cFondo);
 } 
 
 public function insertar($contenido,$fila,$columna)
  {
    $this->celdas[$fila][$columna]=$contenido;
  }
 
 public function mostrar()
 {
    echo '<table border="1">';
    for($i=1;$i<=$this->filas;$i++)
    {
        echo '<tr>';
        for($j=1;$j<=$this->columnas;$j++)
        {
            echo '<td style="color:'.$this->celdas[$i][$j]->colorFuente.';background-color:'.$this->celdas[$i][$j]->colorFondo.'">'.$this->celdas[$i][$j]->texto.'</td>';        
        }
        echo '</tr>';
    }
    echo '</table>';
 }
}

$tabla1=new Tabla(1,2);
$celda=new Celda("1", "#8B008B", "#DDA0DD");
$tabla1->insertar($celda, 1, 1);
$celda=new Celda("2", "#8B008B", "#DDA0DD");
$tabla1->insertar($celda, 1, 2);
$tabla1->mostrar(); 

?>
    
    