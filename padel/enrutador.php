<?php
session_start();
//session_destroy();
?>
<?php

function autocarga($clase)
{

    $ruta = "./controlador/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./modelo/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/partidas/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/jugadores/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/login/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }
}

function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

spl_autoload_register("autocarga");
if ($_REQUEST) {

    if (isset($_REQUEST["accion"])) {



        //Inicio
        if ($_REQUEST['accion'] == "inicio") {

            ControladorLogin::mostrarFormularioLogin();
        }

        if ($_REQUEST['accion'] == "checkLogin") {
            $email = filtrado($_REQUEST["email"]);
            $password = filtrado($_REQUEST["password"]);
            ControladorLogin::chequearLogin($email, $password);
        }

        if ($_REQUEST["accion"] == "mostrarPartida") {
            ControladorPartida::mostrarPartida();
        }


        if ($_REQUEST["accion"] == "cerrarSesion") {
            session_destroy();
            echo '<script>window.location="' . "enrutador.php?accion=inicio" . '"</script>';
        }

        if ($_REQUEST["accion"] == "mostrarJugador") {
            $id = $_REQUEST["id"];
            ControladorJugadores::mostrarJugadores($id);
        }


        if ($_REQUEST["accion"] == "insertar") {

            $fecha = filtrado($_REQUEST["fecha"]);
            $hora = filtrado($_REQUEST["hora"]);
            $ciudad = filtrado($_REQUEST["ciudad"]);
            $lugar = filtrado($_REQUEST["lugar"]);
            $cubierto = filtrado($_REQUEST["estado"]);
            $estado = 0;

            $idPartida=ControladorPartida::insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado);
            $idJugador = unserialize($_SESSION["jugador"])->getId();

            ControladorJP::insertarJP($idJugador,$idPartida);
            //echo '<script>window.location="' . "enrutador.php?accion=mostrarPartida" . '"</script>';

        }
    }
}


?>