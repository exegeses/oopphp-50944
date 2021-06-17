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
                            D.regID, regNombre,
                            destPrecio,
                            destAsientos, destDisponibles,
                            destActivo
                        FROM destinos D, regiones R 
                        WHERE R.regID = D.regID";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $destinos = $stmt->fetchAll();
            return $destinos;
        }

        public function verDestinoPorID()
        {
            $destID = $_GET['destID'];
            $link = Conexion::conectar();
            $sql = "SELECT 
                            destID,  
                            destNombre,
                            D.regID, regNombre,
                            destPrecio,
                            destAsientos, destDisponibles,
                            destActivo
                        FROM destinos D, regiones R 
                        WHERE R.regID = D.regID
                         AND destID = :destID";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':destID', $destID, PDO::PARAM_INT);
            $stmt->execute();
            $destino = $stmt->fetch();
            //registrar todos los atributos
            $this->setDestID($destino['destID']);
            $this->setDestNombre($destino['destNombre']);
            $this->setRegID($destino['regID']);
            self::setRegNombre($destino['regNombre']);
            $this->setDestPrecio($destino['destPrecio']);
            $this->setDestAsientos($destino['destAsientos']);
            $this->setDestDisponibles($destino['destDisponibles']);
            $this->setDestActivo($destino['destActivo']);
            return $this;
        }

        public function modificarDestino()
        {
            $destID = $_POST['destID'];
            $destNombre = $_POST['destNombre'];
            $regID = $_POST['regID'];
            $destPrecio = $_POST['destPrecio'];
            $destAsientos = $_POST['destAsientos'];
            $destDisponibles = $_POST['destDisponibles'];
            $link = Conexion::conectar();
            $sql = "UPDATE destinos
                        SET
                            destNombre = :destNombre,
                            regID = :regID,
                            destPrecio = :destPrecio,
                            destAsientos = :destAsientos,
                            destDisponibles = :destDisponibles
                        WHERE 
                            destID = :destID";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':destNombre', $destNombre, PDO::PARAM_STR);
            $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);
            $stmt->bindParam(':destPrecio', $destPrecio, PDO::PARAM_INT);
            $stmt->bindParam(':destAsientos', $destAsientos, PDO::PARAM_INT);
            $stmt->bindParam(':destDisponibles', $destDisponibles, PDO::PARAM_INT);
            $stmt->bindParam(':destID', $destID, PDO::PARAM_INT);
            if( $stmt->execute() ){
                $this->setDestID( $destID );
                $this->setDestNombre( $destNombre );
                $this->setRegID($regID);
                $this->setDestPrecio($destPrecio);
                $this->setDestAsientos($destAsientos);
                $this->setDestDisponibles($destDisponibles);
                $this->setDestActivo(1);//default
                return $this;
            }
            return false;
        }

        public function agregarDestino()
        {
            $destNombre = $_POST['destNombre'];
            $regID = $_POST['regID'];
            $destPrecio = $_POST['destPrecio'];
            $destAsientos = $_POST['destAsientos'];
            $destDisponibles = $_POST['destDisponibles'];
            $link = Conexion::conectar();
            $sql = "INSERT INTO destinos
                            ( destNombre, regID, destPrecio, destAsientos, destDisponibles )
                        VALUES
                            ( :destNombre, :regID, :destPrecio, :destAsientos, :destDisponibles )";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':destNombre', $destNombre, PDO::PARAM_STR);
            $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);
            $stmt->bindParam(':destPrecio', $destPrecio, PDO::PARAM_INT);
            $stmt->bindParam(':destAsientos', $destAsientos, PDO::PARAM_INT);
            $stmt->bindParam(':destDisponibles', $destDisponibles, PDO::PARAM_INT);
            if ( $stmt->execute() ){
                $this->setDestID( $link->lastInsertId() );
                $this->setDestNombre( $destNombre );
                $this->setRegID($regID);
                $this->setDestPrecio($destPrecio);
                $this->setDestAsientos($destAsientos);
                $this->setDestDisponibles($destDisponibles);
                $this->setDestActivo(1);//default
                return $this;
            }
            return false;
        }

        public function eliminarDestino()
        {
            $destID = $_POST['destID'];
            $destNombre = $_POST['destNombre'];
            $link = Conexion::conectar();
            $sql = "DELETE FROM destinos
                        WHERE destID = :destID";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':destID', $destID, PDO::PARAM_INT);
            if( $stmt->execute() ){
                //registramos los atributos
                $this->setDestID($destID);
                $this->setDestNombre($destNombre);
                return $this;
            }
            return false;
        }

        ##################################
        ##### getters && setters
        public function getDestID()
        {
            return $this->destID;
        }
        public function setDestID($destID)
        {
            $this->destID = $destID;
        }

        public function getDestNombre()
        {
            return $this->destNombre;
        }
        public function setDestNombre($destNombre)
        {
            $this->destNombre = $destNombre;
        }

        public function getRegID()
        {
            return $this->regID;
        }
        public function setRegID($regID)
        {
            $this->regID = $regID;
        }

        public static function getRegNombre()
        {
            return self::$regNombre;
        }
        public static function setRegNombre($regNombre)
        {
            self::$regNombre = $regNombre;
        }

        public function getDestPrecio()
        {
            return $this->destPrecio;
        }
        public function setDestPrecio($destPrecio)
        {
            $this->destPrecio = $destPrecio;
        }

        public function getDestAsientos()
        {
            return $this->destAsientos;
        }
        public function setDestAsientos($destAsientos)
        {
            $this->destAsientos = $destAsientos;
        }

        public function getDestDisponibles()
        {
            return $this->destDisponibles;
        }
        public function setDestDisponibles($destDisponibles)
        {
            $this->destDisponibles = $destDisponibles;
        }

        public function getDestActivo()
        {
            return $this->destActivo;
        }
        public function setDestActivo($destActivo)
        {
            $this->destActivo = $destActivo;
        }

    }