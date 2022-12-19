<?php
    session_start();

    function autocarga($clase){ 
        $ruta = "./controlador/$clase.php"; 
        if (file_exists($ruta)){ 
          include_once $ruta; 
        }

        $ruta = "./modelo/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }
        $ruta = "$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vista/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }
    } 


    spl_autoload_register("autocarga");



    if ($_REQUEST) {
        if (isset($_REQUEST['accion'])) {

            if ($_REQUEST['accion'] == "inicio") {
                ControladorPartida::iniciarPartida();
            }

            if($_REQUEST["accion"] == "pedir"){
                ControladorPartida::pedirCarta();
            }

            if($_REQUEST["accion"] == "nueva"){
                session_destroy();
                header("Location: enrutador.php?accion=inicio");

            }

            if($_REQUEST["accion"]=="mostrar"){
                ControladorPartida::mostrarPartida();
            }

        }
    }





?>