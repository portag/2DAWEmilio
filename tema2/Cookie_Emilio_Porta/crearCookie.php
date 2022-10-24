<?php

//Si he pinchado en un link
if (isset($_COOKIE["servidor"])) {

    //Leemos lo que ya te gusta
    $gustos = $_COOKIE['servidor'];

    //Aquí desencriptas los datos
    //-----

    //Aquí habría que meter antes el contador de visitas.
    //juegos-1#ropa-4
    if (isset($_GET["interes"])) {
        $gustos = $gustos . "#" . $_GET['interes'];
        $dep = 0;
        $jue = 0;
        $mod = 0;
        if ($_GET['interes'] == "deporte") {
            $dep++;
            echo '<script>window.location="' . "index.php" . '"</script>';
        }

        if ($_GET['interes'] == "juegos") {
            $jue++;
            echo '<script>window.location="' . "index.php" . '"</script>';
        }

        if ($_GET['interes'] == "moda") {
            $mod++;
            echo '<script>window.location="' . "index.php" . '"</script>';
        }
    }

    //Separar los gustos y meterlos en un array
    $gustosArray = explode("#", $gustos);
    $gustosArray = array_unique($gustosArray);

    //Volvemos a convertir a string ya quitados los duplicados
    $gustosString = implode("#", $gustosArray);

    //Aquí encriptas los datos 
    //-----

    setcookie('servidor', $gustosString, time());
    //echo "Cookie creada";

}
