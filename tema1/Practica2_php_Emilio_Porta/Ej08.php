<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            background-image: url(./fotosDND/fondo.jpg);
            font-family: Arial, Helvetica, sans-serif;
        }

        nav a {
            color: whitesmoke;
        }

        p {
            font-size: 20px;
            color: whitesmoke;
        }

        .prin {
            width: 300px;
            height: 500px;
        }

        .habs {
            width: 150px;
            height: 150px;
            padding-top: 10px;
        }

        ul {
            position: absolute;

        }

        table {
            position: relative;

        }

        h1 {
            text-align: center;
            color: whitesmoke;
        }
    </style>
</head>

<body>



    <?php



    $clases = array(
        array(
            "principal" => "./fotosDND/barbaro.png", "clase" => "Bárbaro",
            "descripcion" => "Esta gente vive para estar borrachos tras 90 cervezas y enfadarse, son<br>
            especialistas en combate cuerpo a cuerpo y pueden aguantar mucho daño, se recomienda <br>
            esta clase con la raza orco",
            "hab1" => "./fotosDND/hab1barb.png", "hab2" => "./fotosDND/hab2barb.png",
            "hab3" => "./fotosDND/hab3barb.png", "hab4" => "./fotosDND/hab4barb.png"
        ),

        array(
            "principal" => "./fotosDND/palaca.png", "clase" => "Paladín",
            "descripcion" => "Coloquialmente conocido como Palaca, cree es Dios y le da poderes, <br>
            sigue las normas sociales y es capaz de arrestarte por robar un penique, tanque<br>
            por su armadura y puede lanzar hechizos, se recomienda esta clase con la raza aasimar",
            "hab1" => "./fotosDND/hab1pal.png", "hab2" => "./fotosDND/hab2pal.png", "hab3" => "./fotosDND/hab3pal.png", "hab4" => "./fotosDND/hab4pal.png"
        ),

        array(
            "principal" => "./fotosDND/bard.png", "clase" => "Bardo",
            "descripcion" => "Toca música, es muy bueno en interacciones sociales y lanzando <br>
            hechizos, se les quiere pero tienen cierto problema de autocontrol, se recomieda <br>
            esta clase con la raza de semielfo",
            "hab1" => "./fotosDND/hab1bard.png", "hab2" => "./fotosDND/hab2bard.png", "hab3" => "./fotosDND/hab3bard.png", "hab4" => "./fotosDND/hab4bard.png"
        ),

        array(
            "principal" => "./fotosDND/picaro.png", "clase" => "Pícaro",
            "descripcion" => "Enhorabuena, si tienes o has tenido a uno de estos seguramente te <br>
            has quedado sin dinero porque te lo han robado, son muy ágiles, por lo que se les <br>
            da bien atacar por sorpresa y correr, se recomienda esta clase con la raza de kitsune",
            "hab1" => "./fotosDND/pic1.png", "hab2" => "./fotosDND/pic2.png", "hab3" => "./fotosDND/pic3.png", "hab4" => "./fotosDND/pic4.png"
        ),

        array(
            "principal" => "./fotosDND/guerrero.png", "clase" => "Guerrero",
            "descripcion" => "Intentan defender sin éxito que no son la clase más básica del juego,<br>
            no son muy buenos en lo social, a diferencia del bárbaro, usan su habilidad en vez <br>
            de furia para combatir, se recomienda esta clase con la raza de humano",
            "hab1" => "./fotosDND/gue1.png", "hab2" => "./fotosDND/gue2.png", "hab3" => "./fotosDND/gue3.png", "hab4" => "./fotosDND/gue4.png"
        ),

        array(
            "principal" => "./fotosDND/mago.png", "clase" => "Mago",
            "descripcion" => "Son frágiles, muy frágiles, demasiado, a niveles tempranos no hacen <br>
            demasiado, pero al final son capaces de desinstalarte el juego, especialistas en <br>
            combate a distancia, casters, se recomienda esta clase con la raza de elfo",
            "hab1" => "./fotosDND/mag1.png", "hab2" => "./fotosDND/mag2.png", "hab3" => "./fotosDND/mag3.png", "hab4" => "./fotosDND/mag4.png"
        ),

        array(
            "principal" => "./fotosDND/monje.png", "clase" => "Monje",
            "descripcion" => "Puñetazo puro, no usan armas porque son para casuals, daño sostenido, <br>
            combatientes a corta distancia, tienen cierta capacidad de mediación, se recomienda <br>
            esta clase con la raza de variante humano",
            "hab1" => "./fotosDND/mon1.png", "hab2" => "./fotosDND/mon2.png", "hab3" => "./fotosDND/mon3.png", "hab4" => "./fotosDND/mon4.png"
        )
    );



    function  tabla(&$array)
    {

        echo "<table class='table table-borderless'>";

        echo "<tr>";
        echo "<td rowspan=3>" . "<img class ='prin' src=" . $array["principal"] . ">" . "</td>";
        echo "<td colspan=4>" .
            "<h1>" . $array["clase"] . "</h1>"
            . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td colspan=4>" .
            "<p>" . $array["descripcion"] . "</p>"
            . "</td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td>" . "<img class ='habs' src=" . $array["hab1"] . ">" . "</td>";
        echo "<td>" . "<img class ='habs' src=" . $array["hab2"] . ">" . "</td>";
        echo "<td>" . "<img class ='habs' src=" . $array["hab3"] . ">" . "</td>";
        echo "<td>" . "<img class ='habs' src=" . $array["hab4"] . ">" . "</td>";
        echo "</tr>";


        echo "</table>";
    }


    for ($i = 0; $i < count($clases); $i++) {
        tabla($clases[$i]);
        echo "<br>";
    }

    ?>


</body>

</html>