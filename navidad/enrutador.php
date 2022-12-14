<?php
session_start();
//session_destroy();
?>
<?php

function autocarga($clase){

    $ruta = "./controlador/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./modelo/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/regalos/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/enlaces/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }
    
    $ruta = "./vista/login/$clase.php";
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

        if($_REQUEST["accion"]=="mostrarRegalo"){
            $usuario=unserialize($_SESSION["usuario"])->getId();
            ControladorRegalo::mostrarRegalo($usuario);
        }


        if ($_REQUEST['accion'] == "insertar") {
            $nombre = filtrado($_REQUEST['nombre']);
            $destinatario = filtrado($_REQUEST['destinatario']);
            $precio = filtrado($_REQUEST['precio']);
            $estado = filtrado($_REQUEST['estado']);
            $anio = filtrado($_REQUEST['anio']);
            $idUsuario = filtrado($_REQUEST['idUsuario']);
            ControladorRegalo::insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario);
            echo '<script>window.location="' . "enrutador.php?accion=mostrarRegalo" . '"</script>';
        }

        if($_REQUEST["accion"]=="borrar"){

            $id = $_REQUEST['id'];
            ControladorRegalo::borrarRegalo($id);
            echo '<script>window.location="' . "enrutador.php?accion=mostrarRegalo" . '"</script>';

        }


        if($_REQUEST["accion"]=="borrarEn"){

            $id = $_REQUEST['id'];
            ControladorEnlace::borrarEnlace($id);
            ControladorEnlace::mostrarEnlace($_REQUEST["regalo"]);

        }



        if($_REQUEST["accion"]=="modificar"){
            $nombre = filtrado($_GET['nombre']);
            $destinatario = filtrado($_GET['destinatario']);
            $precio = filtrado($_GET['precio']);
            $estado = filtrado($_GET['estado']);
            $anio = filtrado($_GET['anio']);
            $idRegalo = filtrado($_REQUEST['id']);
            ControladorRegalo::modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idRegalo);
            echo '<script>window.location="' . "enrutador.php?accion=mostrarRegalo" . '"</script>';
        }


        if($_REQUEST["accion"]=="filtrar"){

            $anio = filtrado($_REQUEST['anio']);
            ControladorRegalo::filtrarRegalo($anio);
            //echo '<script>window.location="' . "enrutador.php?accion=inicio" . '"</script>';

        }




        //CONTROLAR ENLACE
        if($_REQUEST["accion"]=="mostrarEnlace"){
            $id = filtrado($_REQUEST["id"]);
            ControladorEnlace::mostrarEnlace($id);
            
        }


        if($_REQUEST["accion"]=="insertarEn"){
            $nombre = filtrado($_REQUEST["nombre"]);
            $enlace = filtrado($_REQUEST["enlace"]);
            $precio = filtrado($_REQUEST["precio"]);
            $imagen = filtrado($_REQUEST["imagen"]);
            $prioridad = filtrado($_REQUEST["prioridad"]);
            $idRegalo = filtrado($_REQUEST["regalo"]);
            ControladorEnlace::insertarEnlace($nombre, $enlace, $precio, $imagen, $prioridad, $idRegalo);
            echo '<script>window.location="' . "enrutador.php?accion=mostrarEnlace&id=".$idRegalo . '"</script>';

        }


        if($_REQUEST["accion"]=="ordenarEnlace"){
            $id = filtrado($_REQUEST["id"]);
            ControladorEnlace::ordenarEnlace($id);
        }


        if($_REQUEST["accion"]=="cerrarSesion"){
            session_destroy();
            echo '<script>window.location="' . "enrutador.php?accion=inicio" . '"</script>';

        }
        
        if($_REQUEST["accion"]=="pdf"){
            $usuario = unserialize($_SESSION["usuario"])->getId();

            ControladorRegalo::generarPDF($usuario);
            echo '<script>window.location="' . "enrutador.php?accion=mostrarRegalo" . '"</script>';

        }


    }



}


?>