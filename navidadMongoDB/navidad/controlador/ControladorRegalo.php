<?php


class ControladorRegalo{

    public static function mostrarRegalo($id) {
        //LLamar al modelo para obtener todas las películas en un array de Pelicula
        $regalos = RegaloBD::getRegalos($id);

        //Llamar a una vista para pintar esas películas
        VistaRegalosMostrarTodos::render($regalos);
    }

    public static function insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario){
        RegaloBD::insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario);
    }

    public static function borrarRegalo($id){
        RegaloBD::borrarRegalo($id);
    }

    public static function modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idRegalo){
        RegaloBD::modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idRegalo);
    }


    public static function filtrarRegalo($anio){
        $regalo = RegaloBD::filtrarRegalo($anio);
        VistaRegalosMostrarTodos::render($regalo);
    }

    public static function generarPDF($id){
        $regalos = RegaloBD::getRegalos($id);
        

    }
}


?>