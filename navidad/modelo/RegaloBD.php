<?php

class RegaloBD{


    public static function getRegalos($id) {

        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM regalos WHERE idUsuario = ?");
        $stmt->bindValue(1, $id);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $regalos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalo');

        ConexionBD::cerrar();

        return $regalos;
    }


    public static function insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        //UPDATE table_name
        //SET column1 = value1, column2 = value2, ...
        //WHERE condition;
        $stmt = $conexion->prepare("INSERT INTO regalos (nombre, destinatario, precio, estado, anio, idUsuario)
        VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $nombre);
        $stmt->bindValue(2, $destinatario);
        $stmt->bindValue(3, $precio);
        $stmt->bindValue(4, $estado);
        $stmt->bindValue(5, $anio);
        $stmt->bindValue(6, $idUsuario);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD

        ConexionBD::cerrar();
    }

    public static function borrarRegalo($id) {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("DELETE FROM regalos WHERE id  = ?");

        $stmt->bindValue(1, $id);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
       
        ConexionBD::cerrar();

    }


    public static function modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idRegalo)
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        //UPDATE table_name
        //SET column1 = value1, column2 = value2, ...
        //WHERE condition;
        $stmt = $conexion->prepare("UPDATE regalos SET nombre = ?, destinatario = ?, precio = ?, estado = ?, anio = ? WHERE  id = ?");
        $stmt->bindValue(1, $nombre);
        $stmt->bindValue(2, $destinatario);
        $stmt->bindValue(3, $precio);
        $stmt->bindValue(4, $estado);
        $stmt->bindValue(5, $anio);
        $stmt->bindValue(6, $idRegalo);


        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD

        ConexionBD::cerrar();
    }


    public static function filtrarRegalo($anio) {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM regalos WHERE anio = ?");

        $stmt->bindValue(1, $anio);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $regalitos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalo');

        ConexionBD::cerrar();

        return $regalitos;
    }



}



?>