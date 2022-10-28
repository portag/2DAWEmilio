<?php

//Si he pinchado en un link
if ($_GET) {

    if (isset($_COOKIE["servidor"])) {
            //Leemos lo que ya te gusta
        $gustos = $_COOKIE['servidor'];

        //Aquí desencriptas los datos
        //-----

        $clave  = 'dfhausflkanbaoretuiyhskjavbnadlisuth';
        //Metodo de encriptaciÃ³n
        $method = 'aes-256-cbc';
        // Puedes generar una diferente usando la funcion $getIV()
        $iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");




        //Separar los gustos y meterlos en un array
        $gustosArray = explode("#", $gustos);

        //CreacionCookie#moda-1#deportes-2
        $encontrado = false;
        for ($i = 1; $i < count($gustosArray); $i++) {

            $gustoContadorArray = explode("-", $gustosArray[$i]);

            if ($_GET['interes'] == $gustoContadorArray[0]) {
                $gustoContadorArray[1]++;
            }

            $gustosArray[$i] = implode("-", $gustoContadorArray);
        }

        //Volvemos a convertir a string ya quitados los duplicados
        $gustosString = implode("#", $gustosArray);


        //Aquí encriptas los datos 
        //-----



        $encriptar = function ($valor) use ($method, $clave, $iv) {
            return openssl_encrypt($valor, $method, $clave, false, $iv);
        };

        $gustosString = $encriptar($gustosString);

        $desencriptar = function ($valor) use ($method, $clave, $iv) {
            $encrypted_data = base64_decode($valor);
            return openssl_decrypt($valor, $method, $clave, false, $iv);
        };

        $gustosString = $desencriptar($gustosString);



        setcookie('servidor', $gustosString, time() + 60000, "/tema2", "servidoremilio.herokuapp.com", true, false);
        //echo "Cookie creada";
    } else {
        setcookie('servidor', "CreacionCookie#moda-0#deporte-0#juegos-0", time() + 60000, "/tema2", "servidoremilio.herokuapp.com", true, false);
    }


    header("Location: index.php");
}
