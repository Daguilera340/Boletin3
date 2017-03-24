<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            class Calculadora{
                
                static function sumar($v1,$v2){
                    
                    return($v1 + $v2);
                    
                }
                static function restar($v1,$v2){
                    
                    return($v1 - $v2);
                }
                static function multiplicar($v1,$v2){
                    
                    return($v1 * $v2);
                }
                static function dividir($v1,$v2){
                    
                    return($v1 / $v2);
                }
                
            }
            echo"Función asumar(10,2): ".Calculadora::sumar(10, 2)."<br>";
            echo"Función restar(10,2): ".Calculadora::restar(10, 2)."<br>";
            echo"Función multiplicar(10,2): ".Calculadora::multiplicar(10, 2)."<br>";
            echo"Función dividir(10,2): ".Calculadora::dividir(10, 2)."<br>";
            
        
        ?>
    </body>
</html>