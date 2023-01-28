<?php

class ControladorBlog{


    public static function pintarBlog(){
        $articulos = ArticuloBD::getArticulo();

        VistaBlog::render($articulos);
    }




}


?>