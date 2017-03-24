<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            class Empleado{
                
              private $nombre;
              private $sueldos;
              
                function inicializar($nombre, $sueldo){
                    
                    $this->nombre = $nombre;
                    $this->sueldo = $sueldo;
                    
                }
                
                function avisarImpuestos(){
                    
                    if($this->sueldo > 3000) echo "El empleado $this->nombre debe pagar impuestos <br>";
                    else echo "El empleado $this->nombre no debe pagar impuestos <br>";
                    
                }
                
            }
        
            $e1 = new Empleado();
            $e2 = new Empleado();
            
            $e1->inicializar("Pedro Ramirez", 2500);
            $e2->inicializar("Alberto Garcia", 3200);
            
            $e1->avisarImpuestos();
            $e2->avisarImpuestos();
        ?>
    </body>
</html>
