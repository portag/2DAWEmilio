<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        function encriptar(&$mensaje,$clave){
            
           $cadena="";

            for($i = 0;$i < strlen($mensaje); $i++){

                $cadena=$cadena.chr(ord($mensaje[$i])+$clave);
                
            } 

        
            return $cadena;
            

        }

        function desencriptar($mensaje,$clave){
            
            $cadena="";

            for($i = 0;$i < strlen($mensaje); $i++){

                $cadena=$cadena.chr(ord($mensaje[$i])-$clave);
                
            } 

        
            return $cadena;
            

        }

        $mensaje = "perfecto tio";
        echo encriptar($mensaje,3);
        echo "</br>";
        echo desencriptar(encriptar($mensaje,3),3);


    ?>
    
</body>
</html>