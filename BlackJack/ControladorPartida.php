
<?php

class ControladorPartida
{


    public static function iniciarPartida()
    {

        $partida = new Partida();

        // Añadir dos cartas al Crupier
        $partida->getJugador()->nuevaCarta($partida->getBaraja()->repartirCarta());
        $partida->getJugador()->nuevaCarta($partida->getBaraja()->repartirCarta());

        $partida->getCrupier()->nuevaCarta($partida->getBaraja()->repartirCarta());
        $partida->getCrupier()->nuevaCarta($partida->getBaraja()->repartirCarta());

        while ($partida->getCrupier()->valorMano()<17) {
            $partida->getCrupier()->nuevaCarta($partida->getBaraja()->repartirCarta());
        }

        $_SESSION["partida"] = serialize($partida);
        echo '<script>window.location="' . "enrutador.php?accion=mostrar" . '"</script>';

    }


    public static function pedirCarta()
    {
        $partida = unserialize($_SESSION["partida"]);
        if ($partida->getJugador()->valorMano() < 22) {
            $partida->getJugador()->nuevaCarta($partida->getBaraja()->repartirCarta());
            echo '<script>window.location="' . "enrutador.php?accion=mostrar" . '"</script>';

        } else {
            echo '<script>window.location="' . "enrutador.php?accion=plantar" . '"</script>';
        }
    }

    public static function mostrarPartida(){
        $partida = unserialize($_SESSION["partida"]);
        VistaPartida::render($partida);
    }

    public static function comprobarGanador(){
        
    }
}






?>