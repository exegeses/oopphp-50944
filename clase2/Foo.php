<?php

    class Foo
    {
        static $atrEstatico;

        private function __construct()
        {
            echo 'método constructor invocado';
        }
        public function publico()
        {
            echo 'método público invocado';
        }
        private function privado()
        {
            echo 'método privado invocado';
        }
        static function estatico()
        {
            echo 'método estático invocado';
        }
        ## acceso a atributo estático
        public static function setAtrEstatico($atrEstatico)
        {
            self::$atrEstatico = $atrEstatico;
        }
        public static function getAtrEstatico()
        {
            return self::$atrEstatico;
        }
    }