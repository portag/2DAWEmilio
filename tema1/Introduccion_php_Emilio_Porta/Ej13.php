<?php

//por referencia
function anadir(&$array,$valor,$n){
    for($i = 0;$i < $n; $i++){
        array_push($array,$valor);
    }  
 
}


function pintar($array){
    for($i = 0;$i < count($array); $i++){
        echo $array[$i]. " ";
    }  
 
}

function borrar(&$array,$n){
    for($i = 0;$i < $n; $i++){
        array_shift($array);
    } 
    
}

function vaciar(&$array){

    $array = array();

}

$array = array();

anadir($array,2,4);
borrar($array,3);
pintar($array);

?>