<?php
include_once('modelo.php');

//Función para limpiar los input de los formularios
function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}





//pinta todos los préstamos
function pintarPrestamos()
{

    $prestamos = selectPrestamos();

?>

<form action="controlador.php">
    <label for='dni' class='form-label'>Nombre del cliente</label> 
    <select name='dni' aria-label="Default select example">
        <?php
        //REALIZAMOS UN OPTION DE TODOS LOS NOMBRES DE LOS CLIENTES, MANDAN EL VALOR DEL DNI INTERNAMENTE
        $a = selectUsuario();


        foreach ($a as $valor) {

            echo "<option name='dni' value='" . $valor["dni"] . "'>" . $valor["nombre"] . "</option>";
        }
        ?>

    </select>

    <label for='estado' >Estado</label> 
    <select name='estado' aria-label="Default select example">
        
        <option name=estado value="Activo">Activo</option>
        <option name="estado" value="Devuelto">Devuelto</option>
        <option name="estado "value="Pasado1Mes">Pasado 1 mes</option>
        <option name="estado "value="Pasado1Año">Pasado 1 año</option>

    </select>
    <input type="hidden" name="accion" value="filtrar">
    <button type="submit" class="bg-dark text-light" formmethod="get">Filtrar</button>
</form>
    

<?php



    echo "<table class='table table-dark table-bordered text-center' style='font-size: 15px;align-items: center;' id='dataTable' width='100%' cellspacing='0'>";
    //Cabecera
    echo "<tr>";
    echo "<th> Estado </th>";
    echo "<th> Libro </th>";
    echo "<th> Cliente </th>";
    echo "<th> Fecha inicio </th>";
    echo "<th> Fecha fin </th>";




    echo "</tr>";

    //Contenido
    foreach ($prestamos as $presta) {
        echo '<tr>';
        echo '<td>' . $presta['estado'] . '</td>';
        echo '<td>' . $presta['titulo'] . '</td>';
        echo '<td>' . $presta['nombre'] . '</td>';

        echo '<form action="controlador.php?accion=modificar">
        <td><input class="bg-dark text-light" type="date" name="ini" value="' . $presta['fechaIni'] . '"></td>
        <td><input class="bg-dark text-light" type="date" name="fin" value="' . $presta['fechaFin'] . '"></td>
        <input class="bg-dark text-light" type="hidden" name="id" value="' . $presta['id'] . '">
        <input class="bg-dark text-light" type="hidden" name="accion" value="modificar">
        <td><button type="submit" class="bg-dark text-light btn btn-primary btn-user btn-block" formmethod="get">Atualizar</button></td>
        </form>';

        echo "</tr>";
    }
    echo "</table>";
}




//pintar los prestamos filtrados
function pintarFiltro()
{

    $prestamos = filtradoPrestamos($_GET["dni"],$_GET["estado"]);


    echo "<a href='index.php' class='btn btn-dark float-right'> Ver todos los préstamos</a>";
    echo "<table class='table table-dark table-bordered text-center' style='font-size: 15px;align-items: center;' id='dataTable' width='100%' cellspacing='0'>";
    //Cabecera
    echo "<tr>";
    echo "<th> Estado </th>";
    echo "<th> Libro </th>";
    echo "<th> Cliente </th>";
    echo "<th> Fecha inicio </th>";
    echo "<th> Fecha fin </th>";

    echo "</tr>";

    //Contenido
    foreach ($prestamos as $presta) {
        echo '<tr>';
        echo '<td>' . $presta['estado'] . '</td>';
        echo '<td>' . $presta['titulo'] . '</td>';
        echo '<td>' . $presta['nombre'] . '</td>';

        echo '<form action="controlador.php?accion=modificar">
        <td><input class="bg-dark text-light" type="date" name="ini" value="' . $presta['fechaIni'] . '"></td>
        <td><input class="bg-dark text-light" type="date" name="fin" value="' . $presta['fechaFin'] . '"></td>
        <input class="bg-dark text-light" type="hidden" name="id" value="' . $presta['id'] . '">
        <input class="bg-dark text-light" type="hidden" name="accion" value="modificar">
        <td><button type="submit" class="bg-dark text-light btn btn-primary btn-user btn-block" formmethod="get">Atualizar</button></td>
        </form>';


        echo "</tr>";
    }
    echo "</table>";
}
