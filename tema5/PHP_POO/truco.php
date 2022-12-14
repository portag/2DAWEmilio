<?php

class Truco
{

    private $nombre;
    private $descripcion;


    function __construct($nombre, $descripcion)
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }



    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }





    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }


    public function pintar()
    {
        echo ''.$this->getNombre() . " " . $this->getDescripcion();
    }

    


}


