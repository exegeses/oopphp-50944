<?php

    class Empleado extends Persona
    {
        public function verDatos()
        {
            //código de Persona->verDatos()
            $aux = Persona::verDatos();
            return $aux .'texto nuevo';
        }
    }