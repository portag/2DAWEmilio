<?php 

class Carta {

    protected $palo;
    protected $numero;

    public function construct($palo, $numero) {
        $this->palo = $palo;
        $this->numero = $numero;
    }

    public function toString() {
        return "<img src='./imagenes/".$this->palo."".$this->numero.".png' width='50%'>";
    }

   
    public function getPalo()
    {
            return $this->palo;
    }

  
    public function setPalo($palo)
    {
            $this->palo = $palo;

            return $this;
    }


    public function getNumero()
    {
            return $this->numero;
    }

    public function setNumero($numero)
    {
            $this->numero = $numero;

            return $this;
    }


    public function getValor() {

        if ($this->numero <= 9) {
            return $this->numero;
        } else if ($this->numero = 1) {
            return 11; //Controlar si me paso que valga 1
        } else if ($this->numero > 9) {
            return 10;
        }
    }

}



?>