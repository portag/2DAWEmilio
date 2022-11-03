<?php
session_start();
?>


<!--formulario para la letra-->

<?php

function escribirFormulario()
{
    echo '<form action="controlador.php" method="post">
        <input type="text" placeholder="aqui va una letra..." name="l" maxlength="1" autofocus><br><br>
        <button type="submit">Envia letra</button>
    </form><br>

    <form action="controlador.php" method="post">
        <button type="submit" name="b">Nueva partida</button>
    </form>';
}

function reintentar()
{
    echo '<form action="controlador.php" method="post">
        <button type="submit" name="b">Nueva partida</button>
    </form>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    body {
        background-image: url("./imagenes/fondo.jpg");
    }

    .cuadro {
        margin-top: 50px;
        float: left;
        margin-left: 100px;
        border: 1px solid black;
        padding: 50px;
        background-color: white;
    }

    .imagen {
        float: right;
        margin-top: 50px;
        margin-right: 100px;
        border: 1px solid black;
        padding: 50px;
        background-color: white;
    }

    img {
        width: 300px;
        height: 300px;
    }
</style>

<body>


    <?php

    //array de palabras
    $palabras = array(
        "hola", "programar", "teclado", "monitor", "jugar", "ayuda", "moto", "coche", "java", "mola",
        "mesa", "consola", "mando", "raton", "feliz", "triste", "rojo", "azul", "verde", "morado",
        "mundo", "fila", "columna", "escribir", "hablar", "compartir", "facil", "dificil", "tambor", "trompeta",
        "bajo", "alto", "mediano", "monje", "druida", "internet", "dado", "cara", "mano", "pierna",
    );

    $probada = array();


    //generamos una palabra de una posicion aleatoria del array
    if (!isset($_SESSION["palabra"])) {
        $_SESSION["adivina"] = "";
        $_SESSION["palabra"] = $palabras[rand(0, count($palabras) - 1)];
        $_SESSION["letrasProbadas"] = $probada;
        $_SESSION["contador"] = 0;

        //ocultamos la palabra a adivinar con otra variable
        for ($i = 0; $i < strlen($_SESSION["palabra"]); $i++) {
            $_SESSION["adivina"] .= "*";
        }
        echo "<div class='cuadro'>";
        escribirFormulario();
        //estado de una partida nueva
        echo "<br>";
        echo "<br>";
        echo $_SESSION["adivina"];
        echo "<br>";
        echo "<br>";
        echo "Letras probadas: ";
        echo "<br>";
        echo "<br>";
        echo "Has fallado " . $_SESSION["contador"] . " veces";
        echo "</div>";

        //si la partida no es nueva
    } else {


        //si ganas
        if ($_SESSION["adivina"] == $_SESSION["palabra"]) {
            echo "<div class='cuadro'>";
            echo 'Has ganado!' . "<br><br>";
            echo "La palabra era: " . $_SESSION["palabra"] . "<br><br>";
            reintentar();
            echo "</div>";
        } else {


            //en caso de perder
            if ($_SESSION["contador"] == 6) {
                echo "<div class='cuadro'>";
                echo 'Que pena!, has perdido' . "<br><br>";
                echo "La palabra era: " . $_SESSION["palabra"] . "<br><br>";
                reintentar();
                echo "</div>";

                echo "<div class='imagen'>";
                echo "<img class ='prin' src=" . "./imagenes/6.png" . ">";
                echo "</div>";


                //datos de la partida ya en proceso
            } else {
                echo "<div class='cuadro'>";
                escribirFormulario();
                echo "<br>";
                echo "<br>";
                echo $_SESSION["adivina"];
                echo "<br>";
                echo "<br>";
                echo "Letras probadas: ";
                for ($i = 0; $i < count($_SESSION["letrasProbadas"]); $i++) {
                    echo $_SESSION["letrasProbadas"][$i] . " ";
                }
                echo "<br>";
                echo "<br>";
                echo "Has fallado " . $_SESSION["contador"] . " veces";
                echo "</div>";
            }
        }
    }

    switch ($_SESSION["contador"]) {
        case 1:
            echo "<div class='imagen'>";
            echo "<img class ='prin' src=" . "./imagenes/1.jpg" . ">";
            echo "</div>";
            break;
        case 2:
            echo "<div class='imagen'>";
            echo "<img class ='prin' src=" . "./imagenes/2.jpg" . ">";
            echo "</div>";
            break;
        case 3:
            echo "<div class='imagen'>";
            echo "<img class ='prin' src=" . "./imagenes/3.jpg" . ">";
            echo "</div>";
            break;
        case 4:
            echo "<div class='imagen'>";
            echo "<img class ='prin' src=" . "./imagenes/4.jpg" . ">";
            echo "</div>";
            break;
        case 5:
            echo "<div class='imagen'>";
            echo "<img class ='prin' src=" . "./imagenes/5.jpg" . ">";
            echo "</div>";
            break;
    }


    ?>




</body>

</html>