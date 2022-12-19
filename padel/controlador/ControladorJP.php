<?php 

class ControladorJP{

    public static function insertarJP($idJugador, $idPartida){
        JugadoresPartidasBD::insertarJP($idJugador, $idPartida);
    }


}


?>