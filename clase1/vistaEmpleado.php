<?php
    require 'Persona.php';
    require 'Empleado.php';
    $Empleado = new Empleado('John', 'Galt');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <pre><?php print_r($Empleado)  ?></pre>
    <div class="objeto">
        <?= $Empleado->verDatos() ?>
    </div>

</body>
</html>