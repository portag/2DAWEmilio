<?php

function conexionBD()
{
    $dbh = null;

    try {
        //mariadb --> nombre del contenedor donde tengamos mysql

        $dsn = "mysql:host=mariadb;dbname=biblioteca";
        $dbh = new PDO($dsn, "root", "toor");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $dbh;
}



//FUNCION INSERTAR JUEGO EN LA BASE DE DATOS
function insertarPrestamo($isbn, $dni, $inicio, $fin, $estado)
{

    $conexion = conexionBD();

    try {
        $stmt = $conexion->prepare("INSERT INTO prestamos (isbn, dni, fechaIni, fechaFin, estado) VALUES (?, ?, ?, ?, ?)");

        $stmt->bindValue(1, $isbn);
        $stmt->bindValue(2, $dni);
        $stmt->bindValue(3, $inicio);
        $stmt->bindValue(4, $fin);
        $stmt->bindValue(5, $estado);
        $stmt->execute();
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}



//MOSTRAR TABLA PRESTAMOS DE LA BASE DE DATOS
function selectPrestamos()
{

    $conexion = conexionBD();
    $tareas = null;

    try {
        $stmt = $conexion->prepare("SELECT prestamos.id, libros.titulo, usuarios.nombre, prestamos.fechaIni, prestamos.fechaFin, prestamos.estado 
        FROM libros, usuarios, prestamos WHERE prestamos.isbn = libros.isbn AND prestamos.dni = usuarios.dni");
        $stmt->execute();
        $tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    $conexion = null; //Cerrar la conexión

    return $tareas;
}


//filtrar prestamos
function filtradoPrestamos($dni, $estado)
{

    $conexion = conexionBD();
    $tareas = null;

    try {
        $stmt = $conexion->prepare("SELECT prestamos.id, libros.titulo, usuarios.nombre, prestamos.fechaIni, prestamos.fechaFin, prestamos.estado 
        FROM libros, usuarios, prestamos WHERE prestamos.isbn = libros.isbn AND prestamos.dni = usuarios.dni AND prestamos.dni = ?
        AND prestamos.estado = ?");
        $stmt->bindValue(1, $dni);
        $stmt->bindValue(2, $estado);
        $stmt->execute();
        $tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    $conexion = null; //Cerrar la conexión

    return $tareas;
}



//SACAREMOS TODOS LO USUARIOS
function selectUsuario()
{

    $conexion = conexionBD();
    $tareas = null;

    try {
        $stmt = $conexion->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        $tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    $conexion = null; //Cerrar la conexión

    return $tareas;
}


//SACAREMOS TODOS LOS LIBROS
function selectLibro()
{

    $conexion = conexionBD();
    $tareas = null;

    try {
        $stmt = $conexion->prepare("SELECT * FROM libros WHERE ejemplarDisp > 0");
        $stmt->execute();
        $tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    $conexion = null; //Cerrar la conexión

    return $tareas;
}



//actualizar la fecha inicio y fecha fin
function updateFecha($estado, $fin, $id)
{

    $conexion = conexionBD();
    $tareas = null;

    try {
        $stmt = $conexion->prepare("UPDATE prestamos SET estado = ?, fechaFin = ? WHERE id = ?");
        $stmt->bindValue(1, $estado);
        $stmt->bindValue(2, $fin);
        $stmt->bindValue(3, $id);
        $stmt->execute();
        $tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    $conexion = null; //Cerrar la conexión

    return $tareas;
}
