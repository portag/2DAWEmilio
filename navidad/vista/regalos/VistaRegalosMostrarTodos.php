<?php


class VistaRegalosMostrarTodos
{




    public static function render($regalos)
    {

        include_once("header.php");


        echo "<form action ='enrutador.php' method='get'>";

        echo '<div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Buscador por año</span>
        <input type="text" name="anio" maxlength="4" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <input type="hidden" name="accion" value="filtrar">
        <td><button class="btn btn-dark" type="submit">Filtrar</button></td>
      </div>';

        echo "</form>";

        echo '<table class="table table-striped">';

        echo "<thead class='table-dark'>";
        echo "<tr>";
        echo "<td>" . strtoupper("Nombre") . "</td>";
        echo "<td>" . strtoupper("Destinatario") . "</td>";
        echo "<td>" . strtoupper("Precio") . "</td>";
        echo "<td>" . strtoupper("Estado") . "</td>";
        echo "<td>" . strtoupper("AÑo") . "</td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";


        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";


        foreach ($regalos as $regalo) {
            echo "<tr>";
            echo "<form action='enrutador.php' method='get'>";
            echo "<td>" . '<input type="text" name="nombre" value="' . $regalo->getNombre() . '">' . "</td>";
            echo "<td>" . '<input type="text" name="destinatario" value="' . $regalo->getDestinatario() . '">' . "</td>";
            echo "<td>" . '<input type="text" name="precio" value="' . $regalo->getPrecio() . '">' . "</td>";
            echo "<td>" .
                '<select name="estado" id="">
                    <option name="estado" value="' . $regalo->getEstado() . '">' . $regalo->getEstado() . '</option>
                    <option name="estado" value="pendiente">Pendiente</option>
                    <option name="estado" value="comprado">Comprado</option>
                    <option name="estado" value="envuelto">Envuelto</option>
                    <option name="estado" value="entregado">Entregado</option>
                </select>'
                . "</td>";
            echo "<td>" . '<input type="text" name="anio" value="' . $regalo->getAnio() . '">' . "</td>";
            echo '<input type="hidden" name="accion" value="modificar">';
            echo '<input type="hidden" name="id" value="' . $regalo->getId() . '">';
            echo "<td><button class='btn btn-warning' type='submit'>M</button></td>";
            echo "</form>";



            echo '<td><a href="enrutador.php?accion=borrar&id=' . $regalo->getId() . '" class="btn btn-danger">B</a> </td>';
            echo '<td><a href="enrutador.php?accion=mostrarEnlace&id=' . $regalo->getId() . '" class="btn btn-info">E</a> </td>';

            echo "</tr>";
        }
        echo '</tbody>';
        echo "</table>";


        include_once("footer.php");
    }



}
