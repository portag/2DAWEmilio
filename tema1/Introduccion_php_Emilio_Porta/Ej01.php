<?php

//el método rand requiere 2 parámetros, el primero es el mínimo, el segundo el máximo
//el número generado estará comprendido entre esos 2 valores
$n = rand(1,30);
$n2 = rand(1,30);

$resta = $n - $n2;
$division = $n / $n2;

echo "Los numeros generados son: " . $n . " y " . $n2 . "</br>";
echo "Resta: " . $resta . ", Division: " . $division;

?>

