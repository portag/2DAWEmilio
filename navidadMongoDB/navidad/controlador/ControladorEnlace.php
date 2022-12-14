<?php

class ControladorEnlace{

    public static function mostrarEnlace($id) {
        //LLamar al modelo para obtener todas las películas en un array de Pelicula
        
        $enlaces = EnlaceBD::getEnlaces($id);
        //Llamar a una vista para pintar esas películas
        VistaEnlacesMostrar::render($enlaces);
    }



    public static function insertarEnlace($nombre, $enlace, $precio, $imagen, $prioridad, $idRegalo){

        EnlaceBD::insertarEnlace($nombre, $enlace, $precio, $imagen, $prioridad, $idRegalo);

    }

    public static function borrarEnlace($id){
        EnlaceBD::borrarEnlace($id);
    }

    public static function ordenarEnlace($id){
        $enlaces = EnlaceBD::ordenarEnlace($id);
        VistaEnlacesMostrar::render($enlaces);
    }


}


?>