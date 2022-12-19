
<?php

class VistaJugadores
{

    public static function render($jugadores)
    {

        include_once("header.php");


        echo '<table class="table table-striped">';

        echo "<thead class='table-dark'>";
        echo "<tr>";
        echo "<td>" . strtoupper("Email") . "</td>";
        echo "<td>" . strtoupper("nombre") . "</td>";
        echo "<td>" . strtoupper("apodo") . "</td>";
        echo "<td>" . strtoupper("nivel") . "</td>";
        echo "<td>" . strtoupper("edad") . "</td>";
        


        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";


        foreach ($jugadores as $jugador) {
            echo "<tr>";

            echo "<td>" . $jugador->getEmail() . "</td>";
            echo "<td>" . $jugador->getNombre() . "</td>";
            echo "<td>" . $jugador->getApodo() . "</td>";
            echo "<td>" . $jugador->getNivel() . "</td>";
            echo "<td>" . $jugador->getEdad() . "</td>";

            //echo '<td><a href="enrutador.php?accion=borrar&id=' . $regalo->getId() . '" class="btn btn-danger">B</a> </td>';

            echo "</tr>";
        }
        echo '</tbody>';
        echo "</table>";


        include_once("footer.php");
    }
}
