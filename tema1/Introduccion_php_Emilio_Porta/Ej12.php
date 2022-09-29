<?php

$diccionario = array();

$diccionario["hola"] = "hello";
$diccionario["rojo"] = "red";
$diccionario["verde"] = "green";
$diccionario["madera"] = "wood";
$diccionario["teclado"] = "keyboard";
$diccionario["portatil"] = "laptop";

$diccionario["caja"] = "box";
$diccionario["juego"] = "game";
$diccionario["jugar"] = "play";
$diccionario["mesa"] = "table";
$diccionario["amigo"] = "friend";

$diccionario["raton"] = "mouse";
$diccionario["pantalla"] = "screen";
$diccionario["movil"] = "phone";
$diccionario["casa"] = "house";
$diccionario["calle"] = "street";

$diccionario["libro"] = "book";
$diccionario["tienda"] = "shop";
$diccionario["coche"] = "car";
$diccionario["pelicula"] = "film";
$diccionario["adios"] = "bye";

echo "Escribe una palabra: ";
$palabra = "bye";
$buscar = 4;
foreach($diccionario as $clave => $valor){
    //encuentra la palabra este en ingles o español
    if(strcmp($palabra, $clave) === 0 || strcmp($palabra,$valor) === 0){
        $buscar = 0;
        echo "Palabra encontrada";
        echo "</br>" . $clave . " : " .  $valor;
    }
 
}

if($buscar != 0){
    echo "Palabra no encontrada";
}

echo "</br>";
echo "</br>";

foreach($diccionario as $clave => $valor){

        echo $clave . " : " .  $valor;
        echo "</br>";
    
}



?>