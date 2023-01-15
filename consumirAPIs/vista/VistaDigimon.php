<?php
class VistaDigimon
{
    public static function mostrarDigimons($pagina)
    {
        include("cabecera.php");

        $uri = "https://www.digi-api.com/api/v1/digimon?pageSize=18&page=" . $pagina;

        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = 'X-Auth-Token: ';
        $stream_context = stream_context_create($reqPrefs);
        $resultado = file_get_contents($uri, false, $stream_context);


        //echo $resultado;

        //Pasar de json a objeto php y recorrer los resultados
        //<img src='https://digimon-api.com/images/digimon/w/{$digimon->name}.png' class='card-img-top' alt='...'>
        if ($resultado != false) {
            $respPHP = json_decode($resultado);
            foreach ($respPHP->content as $digimon) {
                $uri2 = "https://digimon-api.com/api/v1/digimon/" . $digimon->id;
                $resultado2 = file_get_contents($uri2, false, $stream_context);
                if ($resultado2 != false) {
                    $digimonData = json_decode($resultado2);
                    echo "
                        <div class='card m-4' style='width: 18rem;'>
                            <img src='" . $digimonData->images[0]->href . "' class='card-img-top' alt='...'>
                            <hr>
                            <div class='card-body'>
                                <h5 class='card-title'>Nombre: {$digimonData->name}</h5>
                                <p class='card-text text-primary'>Numero de bestiario: #".$digimonData->id."</p>
                                <p class='card-text'>Fecha de salida: ".$digimonData->releaseDate."</p>
                            </div>
                        </div>
                        ";

                }
            }
        }

        echo "<div class='mt-4'>";
            echo "<a class='btn' href='enrutador.php?accion=mostrarDigimonPagina&pagina=" . (0) . "'>|<</a>";

            echo "&nbsp;";

            if ($pagina > 0) {
                echo "<a class='btn' href='enrutador.php?accion=mostrarDigimonPagina&pagina=" . ($pagina - 1) . "'><</a>";
            } else {
                echo "<a class='btn disabled' href='enrutador.php?accion=mostrarDigimonPagina&pagina=" . ($pagina - 1) . "'><</a>";
            }

            echo "&nbsp;";

            if ($pagina < 20) {
                echo "<a class='btn' href='enrutador.php?accion=mostrarDigimonPagina&pagina=" . ($pagina + 1) . "'>></a>";
            } else {
                echo "<a class='btn disabled' href='enrutador.php?accion=mostrarDigimonPagina&pagina=" . ($pagina + 1) . "'>></a>";
            }

            echo "&nbsp;";

            echo "<a class='btn' href='enrutador.php?accion=mostrarDigimonPagina&pagina=" . (20) . "'>>|</a>";
        echo "</div>";
        include("pie.php");
    }




}



?>