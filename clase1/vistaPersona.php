<?php
    require 'Persona.php';
    $Persona = new Persona;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vista Persona</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <pre>
    <?php
        print_r($Persona);
    ?>
    </pre>

    <div class="objeto">
        <?= $Persona->verDatos(); ?>
    </div>

</body>
</html>