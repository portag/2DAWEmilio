<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div class="container-fluid">


    <?php 
    
        $productos = array(
            array("Nombre"=>"zapatillas","imagen"=>"nike.jpg","precio"=>50,"categoria"=>"zapatillas",
            "descripcion"=>"las mejores para correr"),
            array("Nombre"=>"pantalones","imagen"=>"adidas.jpg","precio"=>40,"categoria"=>"pantalon",
            "descripcion"=>"mejor para correr"),
            array("Nombre"=>"chaqueta","imagen"=>"puma.jpg","precio"=>130,"categoria"=>"chaquetas",
            "descripcion"=>"flexible"),
            array("Nombre"=>"guantes bici","imagen"=>"newbalance.jpg","precio"=>30,"categoria"=>"guantes",
            "descripcion"=>"buen agarre")
        );



        echo "<table class='table table-striped'>";
        echo "<tr>";
        echo "<thead>";
        
        foreach(array_keys($productos[0]) as $valor)
            echo "<td>".strtoupper($valor)."</td>";
        echo "</tr>";

        echo "</thead>";
        echo "<tbody>";
        foreach($productos as $clave=>$valor){

            echo "<tr>";
            foreach($valor as $campo){

                echo "<td>";
                echo $campo;
                echo "</td>";

            }


            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    
    ?>
</div>

</body>
</html>