<?php

function num($n){
    $pos = substr($n,1);

    if($pos == 1){
        return "uno";
    }
    if($pos == 2){
        return "dos";
    }
    if($pos == 3){
        return "tres";
    }
    if($pos == 4){
        return "cuatro";
    }
    if($pos == 5){
        return "cinco";
    }
    if($pos == 6){
        return "seis";
    }
    if($pos == 7){
        return "siete";
    }
    if($pos == 8){
        return "ocho";
    }
    if($pos == 9){
        return "nueve";
    }
}

$num = rand(0,99);

if($num == 0){
    echo "cero";
}

if($num == 1){
    echo "cero";
}

if($num == 2){
    echo "dos";
}

if($num == 3){
    echo "tres";
}

if($num == 4){
    echo "cuatro";
}

if($num == 5){
    echo "cinco";
}

if($num == 6){
    echo "seis";
}

if($num == 7){
    echo "siete";
}

if($num == 8){
    echo "ocho";
}

if($num == 9){
    echo "nueve";
}

if($num == 10){
    echo "diez";
}

if($num == 11){
    echo "once";
}

if($num == 12){
    echo "doce";
}

if($num == 13){
    echo "trece";
}

if($num == 14){
    echo "catorce";
}

if($num == 15){
    echo "quince";
}

if($num >= 16 && $num <20){
    echo "dieci" . num($num);
}

if ($num==20){
    echo "veinte";
}

if($num >= 21 && $num <30){
    echo "veinti" . num($num);
}

if($num ==30){
    echo "treinta";
}

if($num >= 31 && $num <40){
    echo "treinta y" . num($num);
}

if($num == 40){
    echo "cuarenta";
}

if($num >= 41 && $num <50){
    echo "cuarenta y" . num($num);
}

if($num == 50){
    echo "cincuenta";
}

if($num >= 51 && $num <60){
    echo "cincuenta y" . num($num);
}

if($num == 60){
    echo "sesenta";
}

if($num >= 61 && $num <70){
    echo "sesenta y" . num($num);
}

if($num == 70){
    echo "setenta";
}

if($num >= 71 && $num <80){
    echo "setenta y" . num($num);
}

if($num == 80){
    echo "ochenta";
}

if($num >= 81 && $num <90){
    echo "ochenta y" . num($num);
}

if($num == 90){
    echo "noventa";
}

if($num >= 91 && $num <99){
    echo "noventa y" . num($num);
}

?>