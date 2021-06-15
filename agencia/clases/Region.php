<?php

    class Region
    {
        private $regID;
        private $regNombre;

        public function listarRegiones()
        {
            $link   = Conexion::conectar();
            $sql    = "SELECT regID, regNombre 
                            FROM regiones";
            $stmt   = $link->prepare($sql);
            $stmt->execute();

            $regiones = $stmt->fetchAll();
            return $regiones;
        }

        ####################################
        ### getters & setters
        /**
         * @return mixed
         */
        public function getRegID()
        {
            return $this->regID;
        }

        /**
         * @param mixed $regID
         */
        public function setRegID($regID)
        {
            $this->regID = $regID;
        }

        /**
         * @return mixed
         */
        public function getRegNombre()
        {
            return $this->regNombre;
        }

        /**
         * @param mixed $regNombre
         */
        public function setRegNombre($regNombre)
        {
            $this->regNombre = $regNombre;
        }
    }