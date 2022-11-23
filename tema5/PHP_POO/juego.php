<?php
include("truco.php");



//CLASE JUEGO
class Juego
{

    private $nombre;
    private $genero;
    private $plataforma;
    private $trucos;




    function __construct($nombre="Bloodborne", $genero="Soulslike", $plataforma="PS4")
    {
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->plataforma = $plataforma;
        $this->trucos = array();
    }





    /**
     * Get the value of trucos
     */
    public function getTrucos()
    {
        return $this->trucos;
    }



    /**
     * Set the value of trucos
     *
     * @return  self
     */
    public function setTrucos($trucos)
    {
        $this->trucos = $trucos;

        return $this;
    }



    /**
     * Get the value of plataforma
     */
    public function getPlataforma()
    {
        return $this->plataforma;
    }



    /**
     * Set the value of plataforma
     *
     * @return  self
     */
    public function setPlataforma($plataforma)
    {
        $this->plataforma = $plataforma;

        return $this;
    }





    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
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


    public function pintar()
    {
        echo ''.$this->getNombre() . " " . $this->getGenero()." ".$this->getPlataforma(). " ";
        foreach($this->trucos as $truco){
            $truco->pintar();
        }
    }


    public function addTruco(Truco $t){

     array_push($this->trucos,$t);

    }

    public function delTruco(Truco $t){

        foreach($this->trucos as $clave => $truco){
            if($truco == $t){
                unset($this->trucos[$clave]);
            }
        }

    }


}


$Bloodborne = new Juego();

$combo = new Truco("Cuchilla dentada","R1+L1");

$Bloodborne->addTruco($combo);
$Bloodborne->delTruco($combo);

$Bloodborne->pintar();

