<?php


class VistaPartida
{




    public static function render($partidas)
    {

        include_once("header.php");


        echo '<table class="table table-striped">';

        echo "<thead class='table-dark'>";
        echo "<tr>";
        echo "<td>" . strtoupper("Fecha") . "</td>";
        echo "<td>" . strtoupper("Hora") . "</td>";
        echo "<td>" . strtoupper("Ciudad") . "</td>";
        echo "<td>" . strtoupper("Lugar") . "</td>";
        echo "<td>" . strtoupper("Cubierto") . "</td>";
        echo "<td>" . "" . "</td>";
        


        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";


        foreach ($partidas as $partida) {
            echo "<tr>";

            echo "<td>" . $partida->getFecha() . "</td>";
            echo "<td>" . $partida->getHora() . "</td>";
            echo "<td>" . $partida->getCiudad() . "</td>";
            echo "<td>" . $partida->getLugar() . "</td>";
            echo "<td>" . $partida->getCubierto() . "</td>";
            
            



            //echo '<td><a href="enrutador.php?accion=borrar&id=' . $regalo->getId() . '" class="btn btn-danger">B</a> </td>';
            echo '<td><a href="enrutador.php?accion=mostrarJugador&id=' . $partida->getId() . '" class="btn btn-info">J</a> </td>';

            echo "</tr>";
        }
        echo '</tbody>';
        echo "</table>";


        include_once("footer.php");
    }



}
