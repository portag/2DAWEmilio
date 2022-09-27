<?php


$formato = new \NumberFormatter('es', \NumberFormatter::SPELLOUT);
$numero = rand(0,99);


echo $numero . " -> " . $formato->format($numero);

//DUDA

?>