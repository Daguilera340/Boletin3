3 - Atributos de una clase <br><br>

<?php   		

class Menu {
    
    private $titulo= array();
    private $enlace= array();

    public function insertar ($t, $e){
      $this->titulo[]=$t;
      $this->enlace[]=$e;
    }
    
    public function verHorizontal(){
        for($i=0;$i<count($this->enlace);$i++)
            {
             echo '<a href="'.$this->enlace[$i].'">'.$this->titulo[$i].'</a><br>'; 
            }      
    }
    
    public function verVertical()
    {
        for($i=0;$i<count($this->enlace);$i++)
        {
        echo '<a href="'.$this->enlace[$i].'">'.$this->titulo[$i].'</a><br>'; 
        echo '<br>';
        }
    } 
   
}

$menu1=new Menu();
$menu1->insertar('Google','http://www.google.com' );
$menu1->insertar('eldiario.es','http://www.eldiario.es');
$menu1->insertar('Facebook','http://www.facebook.com');
$menu1->verVertical(); 
?>