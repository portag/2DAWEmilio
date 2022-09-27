<?php

try {

    $a = 0;
    $b = 10;
    $c = 5;
    $operacion = pow($b,2) -4 * $a * $c;

    if($operacion < 0 || $a == 0){
        throw new Exception('Ha ocurrido un problema');
    }
    $positivo = (-$b + sqrt($operacion)) / (2 * $a);
    $negativo = (-$b - sqrt($operacion)) / (2 * $a);

    echo "Primer resultado: " . $positivo . "</br>"; 
    echo "Segundo resultado: " . $negativo;

} catch (Exception $e){
    echo "Sin solucion";
}

?>