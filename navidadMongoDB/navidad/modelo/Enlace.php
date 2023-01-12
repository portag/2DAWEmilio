<?php

class Enlace{

    private $id;
    private $nombre;
    private $enlace;
    private $precio;
    private $imagen;
    private $prioridad;
    private $idRegalo;


    public function __construct($id=0,$nombre="", $enlace="", $precio=0, $imagen="", $prioridad=0, $idRegalo=0) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->enlace = $enlace;
        $this->precio = $precio;
        $this->imagen = $imagen;
        $this->prioridad = $prioridad;
        $this->idRegalo = $idRegalo;
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
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
     * Get the value of enlace
     */ 
    public function getEnlace()
    {
        return $this->enlace;
    }

    /**
     * Set the value of enlace
     *
     * @return  self
     */ 
    public function setEnlace($enlace)
    {
        $this->enlace = $enlace;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get the value of prioridad
     */ 
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set the value of prioridad
     *
     * @return  self
     */ 
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get the value of idRegalo
     */ 
    public function getIdRegalo()
    {
        return $this->idRegalo;
    }

    /**
     * Set the value of idRegalo
     *
     * @return  self
     */ 
    public function setIdRegalo($idRegalo)
    {
        $this->idRegalo = $idRegalo;

        return $this;
    }
}

?>