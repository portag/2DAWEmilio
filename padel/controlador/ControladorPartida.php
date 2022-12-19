<?php

class ControladorPartida{



    public static function mostrarPartida() {
        //LLamar al modelo para obtener todas las películas en un array de Pelicula
        $partidas = PartidaBD::getPartidas();

        //Llamar a una vista para pintar esas películas
        VistaPartida::render($partidas);
    }


    public static function insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado){
        PartidaBD::insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado);
    }
    
}


?>