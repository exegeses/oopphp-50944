<?php

    class Conexion
    {
        static $link;

        private function __construct()
        {} /* para evitar instanciación */

        static function conectar()
        {
            self::$link = new PDO(
                        'mysql:host=localhost;dbname=agencia',
                        'root',
                        'root'
                    );
            return self::$link;
        }
    }