<?php

class ArticuloBD
{


    public static function getArticulo()
    {

        $conexion = ConexionBD::conectar();

        $coleccion = $conexion->articulos;

        $articulos = $coleccion->find();

        //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
        $arrArticulo = array();
        foreach ($articulos as $articulo) {
            $articulo_OBJ = new Articulo($articulo['id'], $articulo['titulo'], $articulo['texto'], $articulo['imagen'], $articulo['fecha']);
            array_push($arrArticulo, $articulo_OBJ);
        }

        ConexionBD::cerrar();
        return $arrArticulo;
    }


    public static function insertarArticulo($titulo, $texto, $imagen, $fecha)
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        //UPDATE table_name
        //SET column1 = value1, column2 = value2, ...
        //WHERE condition;
        $articuloMayor = $conexion->articulos->findOne(
            [],
            [
                "sort" => ["id" => -1],
            ]
        );

        if (isset($articuloMayor)) {
            $idValue = $articuloMayor["id"];
        } else {
            $idValue = 0;
        }

        $insertOneResult = $conexion->articulos->insertOne([
            "id" => intval($idValue + 1),
            "titulo" => $titulo,
            "texto" => $texto,
            "imagen" => $imagen,
            "fecha" => $fecha
        ]);

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD

        ConexionBD::cerrar();
    }
}


?>