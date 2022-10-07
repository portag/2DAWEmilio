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
        p{
            text-align: center;
        }
    </style>
</head>
<body>
    

    <?php


        function subtotal($linea_pedido){

            if($linea_pedido["iva_r"]==0){
                return $linea_pedido["precio"]*1.21;
            }else{
                return $linea_pedido["precio"]*1.21;
            }

        }


        $carrito = array( array("id" => 1234, "nombre" => "PS4", "precio" => 349.95, "cant" => 2, "iva_r" => 0), 
        array("id" => 1235, "nombre" => "iPhone XS", "precio" => 1249.95, "cant" => 1, "iva_r" => 0), 
        array("id" => 1236, "nombre" => "Chocolate", "precio" => 9.95, "cant" => 5, "iva_r" => 1) );

        
        

        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<tr>";
        foreach(array_keys($carrito[0]) as $valor){

            echo "<td>".strtoupper($valor)."</td>";
        }
        echo "<td>".strtoupper("subtotal")."</td>";


        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach($carrito as $valor){
            echo "<tr>";

            foreach($valor as $campo){
                echo "<td>";
                echo $campo;
                echo "</td>";
            }

                echo "<td>";
                echo subtotal($valor);
                echo "</td>";


            echo "</tr>";

        }

        
        foreach($carrito as $valor){
            
            $col=0;
            foreach($valor as $campo){
                $col++;
            }
            
        }

        $col++;
        $cont=0;
        for($i=0;$i<3;$i++){
            $cont+=subtotal($carrito[$i]);
        }

        echo "<tr>";
        echo "<td colspan=$col>";
            echo "<p>"."TOTAL: ". $cont . "</p>";
        echo "</td>";
        echo "</tr>";

        echo "</tbody>";

        echo "</table>";

        

        echo "<br><br>";


        //DUDA
    ?>


</body>
</html>