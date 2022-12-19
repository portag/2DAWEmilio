<?php

class PartidaBD{

    //RECOGE TODAS LAS PARTIDAS DE LA BD CUYA FECHA SEA MAYOR A LA ACTUAL ORDENADAS POR FECHA
    public static function getPartidas(){

        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM partidas WHERE fecha >= CURDATE() ORDER BY fecha DESC");


        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $partidas = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');

        ConexionBD::cerrar();

        return $partidas;
    }


    public static function insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado){
        $conexion = ConexionBD::conectar();


        $stmt = $conexion->prepare("INSERT INTO partidas (fecha, hora, ciudad, lugar, cubierto, estado) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $fecha);
        $stmt->bindValue(2, $hora);
        $stmt->bindValue(3, $ciudad);
        $stmt->bindValue(4, $lugar);
        $stmt->bindValue(5, $cubierto);
        $stmt->bindValue(6, $estado);

        $stmt->execute();
        $ultimo = $conexion->lastInsertId();
        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD

        ConexionBD::cerrar();

        return $ultimo;
    }


    



}


?>