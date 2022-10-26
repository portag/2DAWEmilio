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

    $clave  = 'dfhausflkanbaoretuiyhskjavbnadlisuth';
    //Metodo de encriptaciÃ³n
    $method = 'aes-256-cbc';
    // Puedes generar una diferente usando la funcion $getIV()
    $iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");

    $str = "holamundo";

    $encriptar = function ($valor) use ($method, $clave, $iv) {
        return openssl_encrypt($valor, $method, $clave, false, $iv);
    };

    $str = $encriptar($str);

    echo $str;

    $desencriptar = function ($valor) use ($method, $clave, $iv) {
        $encrypted_data = base64_decode($valor);
        return openssl_decrypt($valor, $method, $clave, false, $iv);
    };

    $str = $desencriptar($str);

    echo $str;

    ?>


</body>

</html>