<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            class Persona{
                
                private $nombre;
                private $edad;
                
                function __construct($nombre, $edad) {
                    $this->nombre = $nombre;
                    $this->edad = $edad;
                }

                
                function imprimirDatos(){
                    
                    echo "Nombre: $this->nombre <br> Edad: $this->edad <br>";
                    
                }
            
            }
            
            class Empleado
                extends Persona{
                
                    private $sueldo;
                    
                    function __construct($nombre,$edad,$sueldo) {
                        parent::__construct($nombre, $edad);
                        
                        $this->sueldo = $sueldo;
                    }

                    
                    function imprimirDatos() {
                        parent::imprimirDatos();
                        
                        echo "Sueldo: $this->sueldo €";
                    }
                
                
                }
                
            $p1 = new Persona("Pedro Ramírez", 25);
            $e1 = new Empleado("Mario González", 24, 1200);
            
            echo "Persona: <br>";
            $p1->imprimirDatos();
            echo "<br>";
            echo "Empleado: <br>";
            $e1->imprimirDatos();
        
        ?>
    </body>
</html>