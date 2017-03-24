<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            class Cuadrado{
                
                private $lado;
                
                function cargarLado($lado){
                    
                    $this->lado = $lado;
                    
                }
                
                function calcularPerimetro(){
                    
                    echo "El perimetro del cuadrado es ".($this->lado*4)."m <br>";
                    
                }
                function calcularSuperficie(){
                    
                    echo "La superficie del cuadrado es ".$this->lado*$this->lado."m2 <br>";
                    
                }
                
            }
            
            $c1 = new Cuadrado();
            $c1->cargarLado(5);
            
            $c2 = $c1;
            
            $c2->calcularPerimetro();
            $c2->calcularSuperficie();
        
        ?>
    </body>
</html>