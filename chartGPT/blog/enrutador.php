<?php

function autocarga($clase){

    $ruta = "../admin/controlador/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "../admin/modelo/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./controlador/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

}

function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

spl_autoload_register("autocarga");


if($_REQUEST){

    if(isset($_REQUEST["accion"])){

        
        //Inicio
        if ($_REQUEST['accion'] == "blog") {
            ControladorBlog::pintarBlog();
        }

    


    }



}


?>