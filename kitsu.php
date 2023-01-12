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

//$uri = "https://www.googleapis.com/books/v1/volumes?q=".urlencode($_GET['titulo']); 
$uri = "https://valorant-api.com/v1/weapons";       
$reqPrefs['http']['method'] = 'GET';
$reqPrefs['http']['header'] = 'X-Auth-Token: ';
$stream_context = stream_context_create($reqPrefs);
$resultado = file_get_contents($uri, false, $stream_context);

//Pasar de json a objeto php y recorrer los resultados
if ($resultado != false) {
    $respPHP = json_decode($resultado);

    foreach($respPHP->data as $weapon) {
        echo "
        <div class='card' style='width: 18rem;'>
            <img src='{$weapon->displayIcon}' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>{$weapon->displayName}</h5>
                <p class='card-text'></p>
            </div>
        </div>
        ";


    }
}


?>
    
</body>
</html>