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
            
            $array = explode(" ",$mensaje);
            

            $cad = "";

            

            $cad=implode(" ",$array);
            $cad=strrev($cad);

            $cadena="";

            for($i = 0;$i < strlen($cad); $i++){

                $cadena=$cadena.chr(ord($cad[$i])+$clave);
                
            }


            return $cadena;
        }

        function desencriptar($mensaje,$clave){


            $array = explode(" ",$mensaje);

            $cad = "";

            

            $cad=implode(" ",$array);
            $cad=strrev($cad);
            

            $cadena="";

            for($i = 0;$i < strlen($cad); $i++){

                $cadena=$cadena.chr(ord($cad[$i])-$clave)." ";
                
            } 


            return $cadena;
            

        }

        $mensaje = "hola mundo";
        echo encriptar($mensaje,3);
        echo "</br>";
        echo desencriptar(encriptar($mensaje,3),3);

    ?>

</body>
</html>