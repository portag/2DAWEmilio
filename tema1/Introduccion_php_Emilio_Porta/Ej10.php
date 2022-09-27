<?php

$array = array(1,2,3,4,5,6,7,8,9,10);
$cont = 0;

for($i = 1; $i < 11; $i++){
    if($i % 2 == 0){
        $cont+=$array[$i-1];
    }else{
        echo $array[$i-1] . " ";
    }
}

echo "</br>" . $cont;
?>