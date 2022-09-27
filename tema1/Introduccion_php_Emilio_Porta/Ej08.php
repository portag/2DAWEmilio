<?php

//las combinaciones van de 1 a 49, hay 6 numeros en total
$combinacion = array(rand(1,49),rand(1,49),rand(1,49),rand(1,49),rand(1,49),rand(1,49));

$reintegro = rand(1,9);

foreach($combinacion as $valor){

    //si el numero es menor que 10 se añade un 0, puesto que en las combinaciones los numeros de 
    //1 digito aparecen de esa forma(01,02...)
    if($valor < 10){
        echo "0" . $valor . " ";
    }else{
        echo $valor . " ";
    }
    
}

echo "</br>Reintegro: " . $reintegro;

?>