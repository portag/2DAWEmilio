<?php
session_start();

function autocarga($clase){

    $ruta = "./controlador/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./modelo/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/login/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/form/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/articulo/$clase.php";
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
        if ($_REQUEST['accion'] == "inicio") {
            ControladorLogin::mostrarFormularioLogin();
        }

        if($_REQUEST['accion']== "checkLogin"){
            $email=filtrado($_REQUEST["email"]);
            $password=filtrado($_REQUEST["password"]);
            ControladorLogin::chequearLogin($email,$password);
        }

        if($_REQUEST["accion"]=="mostrarForm"){
            ControladorForm::mostrarForm();
        }

        if($_REQUEST["accion"]=="generarArticulo"){
            $texto = $_REQUEST["articulo"];
            ControladorArticulo::mostrarArticulo($texto);
        }

        if($_REQUEST["accion"]=="guardar"){

            $titulo = $_REQUEST["titulo"];
            $texto = $_REQUEST["texto"];

            //$imagen = $_REQUEST["imagen"];
            $fechaNueva  = new DateTime(); 
            $fecha = $fechaNueva->format('d-m-Y');
            $krr    = explode('-', $fecha);
            $result = implode("/", $krr);
            ControladorArticulo::insertarArticulo($titulo, $texto, $_SESSION["imagen"], $result);
            echo '<script>window.location="' . "enrutador.php?accion=mostrarForm".'"</script>';

        }




    }



}


?>