
<?php

class VistaEnlacesMostrar
{

    public static function render($enlaces)
    {


        include_once("header.php");

        echo '<a class="btn btn-dark mb-3" href="#" data-toggle="modal" data-target="#insertarEnlace">Añadir enlace</a>&nbsp';

        if ($enlaces == null) {
            echo "";
        } else {
            echo '<a class="btn btn-dark mb-3" href="enrutador.php?accion=ordenarEnlace&id=' . $enlaces[0]->getIdRegalo() . '">Ordenar por precio</a>';
            echo '<div class="row row-cols 1 row-cols-sm-2 row-cols-md-3 g-3">';

            foreach ($enlaces as $enlace) {


                echo  '<div class="card mx-3" style="width: 18rem;">
                    <img src="' . $enlace->getImagen() . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $enlace->getNombre() . '</h5><br>
                        <p class="card-text">Enlace web: ' . $enlace->getEnlace() . '</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Precio del producto: ' . $enlace->getPrecio() . '</li>
                        <li class="list-group-item">Prioridad del producto: ' . $enlace->getPrioridad() . '</li>
                    </ul>
                    <div class="card-body">
                        <a href="enrutador.php?accion=borrarEn&id=' . $enlace->getId() . '&regalo=' . $enlace->getIdRegalo() . '" class="btn btn-danger">Borrar</a>
                    </div>
                    </div>';
            }
            echo "</div>";
        }
        include_once("footer.php");
    }
}
