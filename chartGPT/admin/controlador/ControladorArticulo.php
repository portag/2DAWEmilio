<?php

class ControladorArticulo{
    public static function mostrarArticulo($texto) {
        VistaArticulo::render($texto);
    }

    public static function insertarArticulo($titulo, $texto, $imagen, $fecha){
        ArticuloBD::insertarArticulo($titulo, $texto, $imagen, $fecha);
    }

}


?>