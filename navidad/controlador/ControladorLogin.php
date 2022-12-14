<?php

class ControladorLogin {

    public static function mostrarFormularioLogin() {
        VistaLogin::render();
    }



    public static function chequearLogin($email, $password) {
        $usuario = null;
        $valido = UsuarioBD::chequearLogin($email, $password, $usuario);

        //Error login
        if ($valido == 0) {
            echo "<script>window.location='enrutador.php?accion=inicio';</script>";
        }

        //Login correcto
        if ($valido == 1) {
            $_SESSION['usuario'] = serialize($usuario);
            echo "<script>window.location='enrutador.php?accion=mostrarRegalo';</script>";
        }


    }


}




?>