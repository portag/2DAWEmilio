<?php

class ControladorLogin {

    public static function mostrarFormularioLogin() {
        VistaLogin::render();
    }



    public static function chequearLogin($email, $password) {
        $jugador = null;
        $valido = JugadorBD::chequearLogin($email, $password, $jugador);

        //Error login
        if ($valido == 0) {
            echo "<script>window.location='enrutador.php?accion=inicio';</script>";
        }

        //Login correcto
        if ($valido == 1) {
            $_SESSION['jugador'] = serialize($jugador);
            echo "<script>window.location='enrutador.php?accion=mostrarPartida';</script>";
        }


    }


}




?>