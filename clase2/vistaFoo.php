<?php
    require 'Foo.php';
    //$Foo = new Foo;# se hizo privado
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Método estático</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Método estático</h1>
    <div class="objeto">
    <?php
        //$Foo->publico(); # no hay objeto
        //$Foo->privado();
        //$Foo->estatico();
        Foo::estatico();
    ?>
    </div>
</body>
</html>
