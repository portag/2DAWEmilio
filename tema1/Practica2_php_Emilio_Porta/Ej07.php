<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        img {
            width: 100px;
            height: 150px;
        }

        .body div {
            grid-template-columns: auto auto auto auto;
        }
    </style>
</head>

<body>
    <?php

    $libreria = array(
        array("isbn" => "1234567891234", "titulo" => "quijote", "descripcion" => "clasico de cervantes", "categoria" => "novela", "editorial" => "norma", "foto" => "./imagenes/don-quijote.jpg", "precio" => 10),
        array("isbn" => "2345678912345", "titulo" => "archivo tormentas", "descripcion" => "lo mejor de fantasia", "categoria" => "novela", "editorial" => "norma", "foto" => "./imagenes/tormentas.jpg", "precio" => 20),
        array("isbn" => "3456789123456", "titulo" => "lazarillo tormes", "descripcion" => "clasico", "categoria" => "novela", "editorial" => "norma", "foto" => "./imagenes/tormes.jpg", "precio" => 5),
        array("isbn" => "4567891234567", "titulo" => "it", "descripcion" => "novela de terror", "categoria" => "negra", "editorial" => "norma", "foto" => "./imagenes/it.jpg", "precio" => 15),
        array("isbn" => "5678912345678", "titulo" => "peter pan", "descripcion" => "fantasia infantil", "categoria" => "novela", "editorial" => "norma", "foto" => "./imagenes/peter.jpg", "precio" => 10),
        array("isbn" => "6789123456789", "titulo" => "juegos del hambre", "descripcion" => "accion juvenil", "categoria" => "novela", "editorial" => "norma", "foto" => "./imagenes/hambre.jpg", "precio" => 25),
        array("isbn" => "7891234567891", "titulo" => "berserk", "descripcion" => "fantasia oscura", "categoria" => "negra", "editorial" => "norma", "foto" => "./imagenes/berserk.jpg", "precio" => 15),
        array("isbn" => "8912345678912", "titulo" => "sherlock", "descripcion" => "crimenes y detectives", "categoria" => "negra", "editorial" => "norma", "foto" => "./imagenes/sherlock.jpg", "precio" => 10),
        array("isbn" => "9123456789123", "titulo" => "crepusculo", "descripcion" => "romance y vampiros", "categoria" => "negra", "editorial" => "norma", "foto" => "./imagenes/crepusculo.jpg", "precio" => 2),
        array("isbn" => "0123456789123", "titulo" => "poemario", "descripcion" => "poemas melancolicos", "categoria" => "negra", "editorial" => "norma", "foto" => "./imagenes/poemario.jpg", "precio" => 5)
    );


    echo "<div class='container'>";
    echo "<div class='row'>";


    $novela = 0;
    $negra = 0;

    echo "<h1>".strtoupper("Novela")."</h1>";
    foreach ($libreria as $valor) {

        if (strcmp($valor["categoria"], "novela") === 0 && $novela < 4) {
            
            echo "<div class='card' style='width: 16rem;'>
                        <img src='" . $valor["foto"] . "' class='card-img-top' alt='...'>
                            <div class='card-body'>
                            <h5 class='card-title'>" . $valor["titulo"] . "</h5>
                            <p class='card-text'>" . $valor['descripcion'] . "</p>
                            <p class='card-text'><small class='text-secondary'>" . $valor["precio"] . " €</small></p>
                            <a href='#' class='btn btn-primary'>Comprar</a>
                        </div>
                    </div>";
            $novela++;  
        }

        
    }

    echo "<h1>".strtoupper($valor["categoria"])."</h1>";
    foreach($libreria as $otrovalor){
        if (strcmp($otrovalor["categoria"], "negra") === 0 && $negra < 4) {
            echo "<div class='card' style='width: 16rem;'>
                        <img src='" . $otrovalor["foto"] . "' class='card-img-top' alt='...'>
                            <div class='card-body'>
                            <h5 class='card-title'>" . $otrovalor["titulo"] . "</h5>
                            <p class='card-text'>" . $otrovalor['descripcion'] . "</p>
                            <p class='card-text'><small class='text-secondary'>" . $otrovalor["precio"] . " €</small></p>
                            <a href='#' class='btn btn-primary'>Comprar</a>
                        </div>
                    </div>";
            $negra++;
        }

    }


    echo "</div>";
    echo "</div>";

    ?>
</body>

</html>