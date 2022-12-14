<?php

class EnlaceBD{

    public static function getEnlaces($id){

        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM enlaces WHERE idRegalo = ?");

        $stmt->bindValue(1, $id);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $enlaces = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Enlace');

        ConexionBD::cerrar();

        return $enlaces;
    }


    public static function insertarEnlace($nombre, $enlace, $precio, $imagen, $prioridad, $idRegalo){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        //UPDATE table_name
        //SET column1 = value1, column2 = value2, ...
        //WHERE condition;
        $stmt = $conexion->prepare("INSERT INTO enlaces (nombre, enlace, precio, imagen, prioridad, idRegalo)
    VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $nombre);
        $stmt->bindValue(2, $enlace);
        $stmt->bindValue(3, $precio);
        $stmt->bindValue(4, $imagen);
        $stmt->bindValue(5, $prioridad);
        $stmt->bindValue(6, $idRegalo);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD

        ConexionBD::cerrar();
    }


    public static function borrarEnlace($id) {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("DELETE FROM enlaces WHERE id  = ?");

        $stmt->bindValue(1, $id);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
       
        ConexionBD::cerrar();

    }


    public static function ordenarEnlace($id){

        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM enlaces WHERE idRegalo = ? ORDER BY precio DESC");

        $stmt->bindValue(1, $id);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $enlaces = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Enlace');

        ConexionBD::cerrar();

        return $enlaces;
    }


}
