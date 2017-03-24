<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            class Trabajador{
                
                private $nombre;
                private $sueldo;
                
                function __construct($nombre, $sueldo) {
                    $this->nombre = $nombre;
                    $this->sueldo = $sueldo;
                }
                
                function getNombre() {
                    return $this->nombre;
                }

                function getSueldo() {
                    return $this->sueldo;
                }

            
            }
            class Empleado
             extends Trabajador{
                
                function __construct($nombre, $sueldo) {
                    parent::__construct($nombre, $sueldo);
                }

            
             }
            class Gerente
             extends Trabajador{
                
                function __construct($nombre, $sueldo) {
                    parent::__construct($nombre, $sueldo);
                }

            
             }
            
             $e1 = new Empleado("Mario Pérez", 1500);
             $e2 = new Empleado("Maria García", 1400);
             $e3 = new Empleado("Sara López", 1300);
             $g1 = new Gerente("Alberto Toledo", 3200);
             $g2 = new Gerente("Laura Martínez", 2800);
             $array = [$e1,$g1,$e2,$g2,$e3];
             $max = 0;
             $mostrar;
             
             for($i = 0; $i < count($array); $i++){
                 
                                  
                 if($array[$i] instanceof Gerente){
                     
                     if($array[$i]->getSueldo() > $max){ 
                         
                         $max = $array[$i]->getSueldo();
                         $mostrar = $array[$i];
                         
                     }
                     
                 }
                 
             }
             
             echo "Nombre: ".$mostrar->getNombre()." <br> Sueldo: ".$mostrar->getSueldo()." <br>";
             
        ?>
    </body>
</html>