<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Persona{
                
                protected $nombre;
                protected $edad;
                
                function cargarDatos($nombre, $edad){
                    
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
                    
                    function cargarSueldo($sueldo){
                        
                        $this->sueldo = $sueldo;
                        
                    }
                    
                    function imprimirSueldo(){
                        
                        echo "Sueldo: $this->sueldo € <br>";
                    }
                    
                    function cambiarEdad($edad){
                        
                        $this->edad = $edad;
                        
                    }
                
                
                }
                
            
            $e1 = new Empleado();

            $e1->cargarDatos("Mario Fernández", 24);
            $e1->cargarSueldo(1200);
            
            echo "Edad inicial: <br>";
            $e1->imprimirDatos();
            echo "<br>";
            $e1->cambiarEdad(30);
            echo "Edad modificada <br>";
            $e1->imprimirDatos();
            
           
        ?>
    </body>
</html>