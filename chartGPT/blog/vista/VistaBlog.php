<?php


class VistaBlog
{

    public static function render($articulos)
    {

        ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>


        <?php

        //echo "<div class='d-flex justify-content-center mt-5 mb-5 mx-5'>";
        foreach ($articulos as $articulo) {

            echo "<div class='d-flex justify-content-center mt-5 mb-5'>";
            echo '<div class="card" style="width: 48rem;">
                    <img src="' . $articulo->getImagen() . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $articulo->getTitulo() . '</h5><br>
                        <p class="card-text">' . $articulo->getTexto() . '</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Fecha: ' . $articulo->getFecha() . '</li>
                    </ul>
                    </div>
                    </div>';
                    
        }

        //echo "</div>";

    }


}



?>