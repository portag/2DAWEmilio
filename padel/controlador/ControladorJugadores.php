<?php

class ControladorJugadores{

    public static function mostrarJugadores($id) {

        $jugadores = JugadorBD::getJugadores($id);

        //Llamar a una vista para pintar esas películas
        VistaJugadores::render($jugadores);
    }


}


?>