<?php

    class Partida {

        protected $baraja;
        protected $crupier;
        protected $jugador;


        public function construct() {
            $this->jugador = new Jugador();
            $this->crupier = new Jugador();
            $this->baraja = new BarajaInglesa();
        }


        
        public function getBaraja()
        {
                return $this->baraja;
        }

        
        public function setBaraja($baraja)
        {
                $this->baraja = $baraja;

                return $this;
        }

         
        public function getCrupier()
        {
                return $this->crupier;
        }

        
        public function setCrupier($crupier)
        {
                $this->crupier = $crupier;

                return $this;
        }

        
        public function getJugador()
        {
                return $this->jugador;
        }

        
        public function setJugador($jugador)
        {
                $this->jugador = $jugador;

                return $this;
        }


        public function toString() {
            $cadena = "";
            $cadena .= "Crupier: ".$this->crupier."<br>";
            $cadena .= "Jugador: ".$this->jugador."<br>";
            return $cadena;
        }
    }

    ?>