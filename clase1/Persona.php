<?php

    class Persona
    {
        private $nombre;
        private $apellido;

        public function __construct($nombre, $apellido)
        {
            $this->setNombre($nombre);
            $this->setApellido($apellido);
        }

        public function verDatos()
        {
            $aux = 'Nombre: '.$this->getNombre();
            $aux .= '<br>';
            $aux .= 'Apellido: '.$this->getApellido();
            $aux .= '<br>';
            return $aux;
        }

        ############################
        ##### getters & setters
        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * @param mixed $nombre
         */
        private function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getApellido()
        {
            return $this->apellido;
        }

        /**
         * @param mixed $apellido
         */
        private function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }



    }
