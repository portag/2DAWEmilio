<?php

class VistaPartida{

    public static function render($partida){
        // Imprimir partida
        echo $partida;
        echo "<br>Crupier: ".$partida->getCrupier()->valorMano();
        echo "<br><br>";
        echo "Jugador: ".$partida->getJugador()->valorMano();
        echo '<br><br><button><a style="text-decoration: none;" style="text-decoration=none" href="enrutador.php?accion=pedir">Pedir</a></button>&nbsp';
        echo '<button><a style="text-decoration: none;" href="enrutador.php?accion=plantar">Retirarse</a></button>&nbsp';
        echo '<button><a style="text-decoration: none;" href="enrutador.php?accion=nueva">Nueva partida</a></button>';

    }


}


?>