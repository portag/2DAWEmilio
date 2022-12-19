<?php

class JugadoresPartidasBD{

    public static function insertarJP($idJugador, $idPartida){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        //UPDATE table_name
        //SET column1 = value1, column2 = value2, ...
        //WHERE condition;
        $stmt = $conexion->prepare("INSERT INTO jugadoresPartidas (idJugador, idPartida)
        VALUES (?, ?)");
        $stmt->bindValue(1, $idJugador);
        $stmt->bindValue(2, $idPartida);

        $stmt->execute();
        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD

        ConexionBD::cerrar();
    }


}

?>