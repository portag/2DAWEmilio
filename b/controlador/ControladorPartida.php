<?php

class ControladorPartida{

    public static function empezarPartida(){
        $partida = new Partida();

        $partida->getJugador()->nuevaCarta($partida->getBaraja()->repartirCarta());
        $partida->getJugador()->nuevaCarta($partida->getBaraja()->repartirCarta());

        $partida->getCrupier()->nuevaCarta($partida->getBaraja()->repartirCarta());
        $partida->getCrupier()->nuevaCarta($partida->getBaraja()->repartirCarta());


        echo $partida;

    }


}

?>