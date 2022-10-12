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
        p {
            text-align: center;
        }
    </style>
</head>

<body>


    <?php


    function subtotal($linea_pedido)
    {

        if ($linea_pedido["iva_r"] == 0) {
            return $linea_pedido["precio"] * 1.21;
        } else {
            return $linea_pedido["precio"] * 1.21;
        }
    }


    $carrito = array(
        array("id" => 1234, "nombre" => "PS4", "precio" => 349.95, "cant" => 2, "iva_r" => 0),
        array("id" => 1235, "nombre" => "iPhone XS", "precio" => 1249.95, "cant" => 1, "iva_r" => 0),
        array("id" => 1236, "nombre" => "Chocolate", "precio" => 9.95, "cant" => 5, "iva_r" => 1)
    );




    echo "<table class='table table-striped'>";
    echo "<thead>";
        echo "<tr>";
        echo "<td>".strtoupper("nombre")."</td>";
        echo "<td>".strtoupper("cantidad")."</td>";
        echo "<td>".strtoupper("precio")."</td>";
        echo "<td>".strtoupper("subtotal")."</td>";


        echo "</tr>";
        echo "</thead>";
    echo "<tbody>";
    $total = 0;
    foreach ($carrito as $linea) {
        echo "<tr>";
        echo "<td>" . $linea['nombre'] . "</td>";
        echo "<td>" . $linea['cant'] . "</td>";
        echo "<td>" . $linea['precio'] . "</td>";

        echo "<td>" . subtotal($linea) . " €</td>";

        $total += subtotal($linea);

        echo "</tr>";
    }

    echo "<tr><td colspan='3'>Total</td><td>" . $total . " €</td></tr>";
    echo "</tbody>";
    echo "</table>";



    echo "<br><br>";

    ?>


</body>

</html>