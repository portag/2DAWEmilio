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

        function separarIP(&$ip){
            $cad = "";
            $separar = explode(".",$ip);
            for($i = 0;$i < count($separar); $i++){
                echo $separar[$i]. " ";
            }  

        
            echo "</br>";
            $cad = (implode(":",$separar));

            echo $cad;
            
        }

        $direccionIP="192.168.11.200";

        separarIP($direccionIP);


        
        

    ?>


</body>
</html>