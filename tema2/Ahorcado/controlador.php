<?php
session_start();
?>


<?php



if (isset($_POST["l"])) {
    //comprobamos si hemos acertado letra
    $letraPulsada = $_POST["l"];
    for ($i = 0; $i < strlen($_SESSION['palabra']); $i++) {
        if ($_SESSION['palabra'][$i] == $letraPulsada) {
            $_SESSION['adivina'][$i] = $letraPulsada;
        }
    }


    //si la letra no esta en el array sumamos fallos
    if(!str_contains($_SESSION['palabra'],$letraPulsada)){
        $_SESSION['contador']++;
    }

    //añadimos la letra al array de probadas si no hemos repetido
    if(!in_array($letraPulsada, $_SESSION["letrasProbadas"])){
        array_push($_SESSION["letrasProbadas"],$letraPulsada);
    }

    echo '<script>window.location="' . "ahorcado.php" . '"</script>';
}

if(isset($_POST["b"])){
    session_destroy();
    echo '<script>window.location="' . "ahorcado.php" . '"</script>';
}




?>