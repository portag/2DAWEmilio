<?php
include_once("lib.php");
include_once("modelo.php");
?>
<?php


//para añadir juego
if (isset($_GET["insertar"])) {
    $isbn = filtrado($_GET["isbn"]);
    $dni = filtrado($_GET["dni"]);
    $inicio = filtrado($_GET["inicio"]);
    $fin = filtrado($_GET["fin"]);
    $estado = filtrado($_GET["estado"]);
    insertarPrestamo($isbn, $dni, $inicio, $fin, $estado);
    echo '<script>window.location="index.php"</script>';
}


//para los botones con variable accion
if (isset($_GET["accion"])) {

    //para actualizar las fechas
    if ($_GET["accion"] == "modificar") {
        $ini=filtrado($_GET["ini"]);
        $fin=filtrado($_GET["fin"]);
        $id=filtrado($_GET["id"]);
        updateFecha($ini,$fin,$id);
        echo '<script>window.location="index.php"</script>';
    }


    //para filtrar los prestamos
    if ($_GET["accion"] == "filtrar") {
        $dni=filtrado($_GET["dni"]);
        $estado=filtrado($_GET["estado"]);

        pintarFiltro($dni,$estado);
        echo '<script>window.location="filtrado.php?dni='.$dni.'&estado='.$estado.'"</script>';
    }

}


?>