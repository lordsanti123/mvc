<?php
    include "core/Enrutador.php";
    $ruta = $_GET['url'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <?php 
            $enrutador = new Enrutador;
            $enrutador->cargar($ruta);
            
            
    ?>
</body>
</html>