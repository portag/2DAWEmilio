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

        $clientes = array(
            "Cosentino", "Garciden", "Deretil", "Makito", "Globomatik"
        );

        function convierteClientes(&$nombre,$opcion){

            switch($opcion){
                case "L":
                    for($i = 0;$i < count($nombre); $i++){
                        echo strtolower($nombre[$i]). " ";
                    }  
                    break;
                case "U":
                    for($i = 0;$i < count($nombre); $i++){
                        echo strtoupper($nombre[$i]). " ";
                    }  
                    break;
                case "M":
                    for($i = 0;$i < count($nombre); $i++){
                        strtolower($nombre[$i]). " ";
                        echo ucfirst($nombre[$i]." ");
                    }  
                    break;
                default:
                    echo "Opcion incorrecta";
            }

        }


        convierteClientes($clientes,"L");
        echo "</br>";
        convierteClientes($clientes,"U");
        echo "</br>";
        convierteClientes($clientes,"M");


    ?>

    
</body>
</html>