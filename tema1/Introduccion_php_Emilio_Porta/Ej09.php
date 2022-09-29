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

        for($i= 0;$i<5;$i++){
            $a = rand(100,255);
            $b = rand(100,255);
            $c = rand(100,255);

            $color = 'rgb('.$a.','.$b.','.$c.')';
            echo '<svg height="100" width="100">  
                <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="'.$color.'" />
                </svg>';

        }
    ?>


</body>
</html>




