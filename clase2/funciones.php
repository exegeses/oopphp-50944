<?php

    ##################
    function conectar()
    {
        $link = mysqli_connect(
            'localhost',
            'root',
            '',
            'agencia'
        );
        return $link;
    }
    ###################
    function listarRegiones()
    {
        $link = conectar();
        $sql = "SELECT regID, regNombre FROM regiones";
        $resultado = mysqli_query($link, $sql);
        $regiones = mysqli_fetch_assoc($resultado);
        return $regiones;
    }
