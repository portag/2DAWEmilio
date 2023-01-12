<?php

class RegaloBD{


    public static function getRegalos($id) {

        $conexion = ConexionBD::conectar();

            $coleccion = $conexion->regalos;

            $regalos = $coleccion->find(["idUsuario"=>$id]);

            //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
            $arrRegalo = array();
            foreach($regalos as $regalo) {
               $regalo_OBJ = new Regalo($regalo['id'], $regalo['nombre'],$regalo['destinatario'],$regalo['precio'],$regalo['estado'],$regalo['anio'],$regalo['idUsuario']);
               array_push($arrRegalo, $regalo_OBJ);
            }

            ConexionBD::cerrar();
            return $arrRegalo;
    }


    public static function insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        //UPDATE table_name
        //SET column1 = value1, column2 = value2, ...
        //WHERE condition;
        $regaloMayor = $conexion->regalos->findOne(
            [],
            [
                "sort" => ["id" => -1],
            ]
            );
        
        if(isset($regaloMayor)){
            $idValue = $regaloMayor["id"];
        }else{
            $idValue = 0;
        }

        $insertOneResult = $conexion->regalos->insertOne([
            "id"=>intval($idValue+1),
            "nombre"=>$nombre,
            "destinatario"=>$destinatario,
            "precio"=>intval($precio),
            "estado"=>$estado,
            "anio"=>intval($anio),
            "idUsuario"=>intval($idUsuario)
        ]);

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD

        ConexionBD::cerrar();
    }

    public static function borrarRegalo($id) {
        $conexion = ConexionBD::conectar();

        $deleteResult = $conexion->regalos->deleteOne((['id' => intVal($id)])); 

        ConexionBD::cerrar();
    }


    public static function modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idRegalo)
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        //UPDATE table_name
        //SET column1 = value1, column2 = value2, ...
        //WHERE condition;
        $updateResult = $conexion->regalos->updateOne(
            ["id"=>intVal($idRegalo)],
            ['$set'=>["nombre"=>$nombre,
                      "destinatario"=>$destinatario,
                      "precio"=>intval($precio),
                      "estado"=>$estado,
                      "anio"=>intval($anio)]]);

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD

        ConexionBD::cerrar();
    }


    public static function filtrarRegalo($anio) {
        $conexion = ConexionBD::conectar();

        $coleccion = $conexion->regalos;
        //Consulta BBDD
        $cursor = $coleccion->find(["anio"=>intval($anio)]);

        $regalos = array();
        foreach($cursor as $regalo){

            $regalo_OBJ = new Regalo($regalo["id"],$regalo["nombre"],$regalo["destinatario"],$regalo["precio"],$regalo["estado"]
            ,$regalo["anio"],$regalo["idUsuario"]);
            array_push($regalos, $regalo_OBJ);
        }

        ConexionBD::cerrar();

        return $regalos;
    }



}



?>