<?php 
    session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title>Laboratorio 12</title>
    <link rel="stylesheet" href="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Manejo de sesiones</h1>
    <h2>Paso 1: se crea la variable de sesion y se almacena</h2>
    <?php
    $var="ejemplo sesiones";
    $_SESSION['var']=$var;
    print("<p>Valor de la variable sesion:  $var</p>");
    ?>
    <a href="lab122.php">Poso 2</a>
</body>
</html>