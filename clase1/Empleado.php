<?php

    class Empleado extends Persona
    {
        private $nLegajo;

        public function __construct($nombre, $apellido, $nro)
        {
            Persona::__construct($nombre, $apellido);
            $this->setNLegajo($nro);
        }

        public function verDatos()
        {
            //código de Persona->verDatos()
            $aux = Persona::verDatos();
            $aux .= 'Nro Legajo: '.$this->getNLegajo();
            return $aux;
        }

        /**
         * @return mixed
         */
        public function getNLegajo()
        {
            return $this->nLegajo;
        }

        /**
         * @param mixed $nLegajo
         */
        public function setNLegajo($nLegajo)
        {
            $this->nLegajo = $nLegajo;
        }

    }