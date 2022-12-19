<?php

class JugadorBD {

    public static function chequearLogin($email, $password, &$jugador) {
        $conexion = ConexionBD::conectar();

        $stmt = $conexion->prepare("SELECT * FROM jugadores WHERE email = ? AND password = ?");
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $password);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Jugador');
        $jugador = $stmt->fetch();

        $filas = $stmt->rowCount();

        //Si no me devuelve ninguna fila el password es incorrecto
        if ($filas == 0) {
            return 0;
        } else {
            //Usuario existe y password correcto 
            ConexionBD::cerrar();
            return 1;
        }
    }

    public static function getJugadores($id){

        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT jugadores.* FROM jugadores JOIN jugadoresPartidas JOIN partidas WHERE 
        jugadores.id = jugadoresPartidas.idJugador AND ? = jugadoresPartidas.idPartida AND partidas.id = jugadoresPartidas.idPartida");
        $stmt->bindValue(1, $id);

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $jugadores = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Jugador');

        ConexionBD::cerrar();

        return $jugadores;
    }



}

?>