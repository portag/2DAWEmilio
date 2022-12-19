
<?php

    class Carta {

        protected $palo;
        protected $numero;

        public function __construct($palo, $numero) {
            $this->palo = $palo;
            $this->numero = $numero;
        }

        public function __toString() {
            return "<img src='./cards/".$this->palo."".$this->numero.".png' width='100px' height='150px'>";
        }

        /**
         * Get the value of palo
         */ 
        public function getPalo()
        {
                return $this->palo;
        }

        /**
         * Set the value of palo
         *
         * @return  self
         */ 
        public function setPalo($palo)
        {
                $this->palo = $palo;

                return $this;
        }

        /**
         * Get the value of numero
         */ 
        public function getNumero()
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         *
         * @return  self
         */ 
        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }


        public function getValor() {

            if ($this->numero <= 9) {
                return $this->numero;
            } else if ($this->numero = 1) {
                return 11; 
            } else if ($this->numero > 9) {
                return 10;
            }
        }
    }