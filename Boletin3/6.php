7 - Modificadores de acceso a atributos y métodos (public - private)<br><br>

<?php
class Menu {
    
    private $titulo= array();
    private $enlace= array();
    private $orientacion;

    public function __construct ($o){
      $this->orientacion=$o;
    }
    
     public function insertar ($t, $e){
      $this->titulo[]=$t;
      $this->enlace[]=$e;
    }
    
    private function mostrarHorizontal(){
        for($i=0;$i<count($this->enlace);$i++)
            {
             echo '<a href="'.$this->enlace[$i].'">'.$this->titulo[$i].'</a><br>'; 
            }      
    }
    
    private function mostrarVertical()
    {
        for($i=0;$i<count($this->enlace);$i++)
        {
        echo '<a href="'.$this->enlace[$i].'">'.$this->titulo[$i].'</a><br>'; 
        echo '<br>';
        }
    } 
    
     public function mostrar(){
        
        if (strtolower($this->orientacion)=="horizontal")
        $this->mostrarHorizontal();
        else
        if (strtolower($this->orientacion)=="vertical")
        $this->mostrarVertical();
   
    }
}

$menu1=new Menu('horizontal');
$menu1->insertar('Google','http://www.google.com');
$menu1->insertar('eldiario.es','http://www.eldiario.es');
$menu1->insertar('Facebook','http://www.facebook.com');
$menu1->mostrar(); 
?>