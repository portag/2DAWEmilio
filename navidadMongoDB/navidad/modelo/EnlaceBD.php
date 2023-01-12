<?php
class EnlaceBD
{

    public static function getEnlaces($id){

        $conexion = ConexionBD::conectar();

        $coleccion = $conexion->enlaces;

        $enlaces = $coleccion->find(["idRegalo"=>$id]);

        //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
        $arrEnlace = array();
        foreach($enlaces as $enlace) {
           $enlace_OBJ = new Enlace($enlace['id'],$enlace['nombre'],$enlace['enlace'],$enlace['precio'],
           $enlace['imagen'],$enlace['prioridad'], $enlace['idRegalo']);
           array_push($arrEnlace, $enlace_OBJ);
        }

        ConexionBD::cerrar();
        return $arrEnlace;
    }


    public static function insertarEnlace($nombre, $enlace, $precio, $imagen, $prioridad, $idRegalo)
    {
        $conexion = ConexionBD::conectar();

        $enlaceMayor = $conexion->enlaces->findOne(
            [],
            [
                "sort" => ["id" => -1],
            ]
            );
        
        if(isset($enlaceMayor)){
            $idValue = $enlaceMayor["id"];
        }else{
            $idValue = 0;
        }

        $insertOneResult = $conexion->enlaces->insertOne([
            "id"=>intval($idValue+1),
            "nombre"=>$nombre,
            "enlace"=>$enlace,
            "precio"=>intval($precio),
            "imagen"=>$imagen,
            "prioridad"=>$prioridad,
            "idRegalo"=>$idRegalo
        ]);

        ConexionBD::cerrar();
    }


    public static function borrarEnlace($id)
    {
        $conexion = ConexionBD::conectar();

        $deleteResult = $conexion->enlaces->deleteOne((['id' => intVal($id)])); 

        ConexionBD::cerrar();
    }


    public static function ordenarEnlace($id)
    {

        $conexion = ConexionBD::conectar();

        $coleccion = $conexion->enlaces;

        $enlaces = $coleccion->find(["idRegalo"=>$id],["sort"=>["precio"=>1]]);

        $arrEnlaces = array();
        foreach($enlaces as $enlace) {
           $enlace_OBJ = new Enlace($enlace['id'],$enlace['nombre'],$enlace['enlace'],$enlace['precio'],$enlace['imagen'],$enlace['prioridad'],$enlace['idRegalo']);
           array_push($arrEnlaces, $enlace_OBJ);
        }

        ConexionBD::cerrar();

        return $arrEnlaces;

    }
}
