<?php

    class Destino
    {
        private $destID;
        private $destNombre;
        private $regID;
        static  $regNombre;
        private $destPrecio;
        private $destAsientos;
        private $destDisponibles;
        private $destActivo;

        ##################################
        ##### CRUD de destinos
        public function listarDestinos()
        {
            $link = Conexion::conectar();
            $sql = "SELECT 
                            destID,  
                            destNombre,
                            D.regID,
                            regNombre,
                            destPrecio,
                            destAsientos,
                            destDisponibles,
                            destActivo
                        FROM destinos D, regiones R 
                        WHERE R.regID = D.regID";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $destinos = $stmt->fetchAll();
            return $destinos;
        }



        /**
         * @return mixed
         */
        public function getDestID()
        {
            return $this->destID;
        }

        /**
         * @param mixed $destID
         */
        public function setDestID($destID)
        {
            $this->destID = $destID;
        }

        /**
         * @return mixed
         */
        public function getDestNombre()
        {
            return $this->destNombre;
        }

        /**
         * @param mixed $destNombre
         */
        public function setDestNombre($destNombre)
        {
            $this->destNombre = $destNombre;
        }

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
        public static function getRegNombre()
        {
            return self::$regNombre;
        }

        /**
         * @param mixed $regNombre
         */
        public static function setRegNombre($regNombre)
        {
            self::$regNombre = $regNombre;
        }

        /**
         * @return mixed
         */
        public function getDestPrecio()
        {
            return $this->destPrecio;
        }

        /**
         * @param mixed $destPrecio
         */
        public function setDestPrecio($destPrecio)
        {
            $this->destPrecio = $destPrecio;
        }

        /**
         * @return mixed
         */
        public function getDestAsientos()
        {
            return $this->destAsientos;
        }

        /**
         * @param mixed $destAsientos
         */
        public function setDestAsientos($destAsientos)
        {
            $this->destAsientos = $destAsientos;
        }

        /**
         * @return mixed
         */
        public function getDestDisponibles()
        {
            return $this->destDisponibles;
        }

        /**
         * @param mixed $destDisponibles
         */
        public function setDestDisponibles($destDisponibles)
        {
            $this->destDisponibles = $destDisponibles;
        }

        /**
         * @return mixed
         */
        public function getDestActivo()
        {
            return $this->destActivo;
        }

        /**
         * @param mixed $destActivo
         */
        public function setDestActivo($destActivo)
        {
            $this->destActivo = $destActivo;
        }



    }