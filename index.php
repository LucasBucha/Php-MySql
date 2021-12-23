<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Document</title>
</head>
<body>
	<h1>HOLA MUNDO</h1>
    <div>
        <?php
            $nombreCurso1 = "Curso MySql y PHP";
            $numeroDeClase1 = 8;
            $precio1 = 6000;
            $fecha1 = "18/12/2021";
        ?>
        <h2><?php echo $nombreCurso1; ?></h2>
        <ul>            
            <li> Numero de clases 1: <?php echo $numeroDeClase1; ?> </li>
            <li> Precio de curso 1 <?php echo $precio1; ?></li>
            <li> Fecha de entrega 1: <?php echo $fecha1; ?> </li>
        </ul>

        <?php
            $nombreCurso2 = "Curso MySql y PHP 2";
            $numeroDeClase2 = 40;
            $precio2 = 7600;
            $fecha2 = "15/02/2021";
        ?>
        <h2><?php echo $nombreCurso2; ?></h2>
        <ul>            
            <li> Numero de clases 1: <?php echo $numeroDeClase2; ?> </li>
            <li> Precio de curso 1 <?php echo $precio2; ?></li>
            <li> Fecha de entrega 1: <?php echo $fecha2; ?> </li>
        </ul>
    </div>

    <?php 
        $duracionTotal = $numeroDeClase1 + $numeroDeClase2;
        $precioTotal = $precio1 + $precio2;
    ?>

    <h3> TOTAL </h3>
    <ul>
        <li> Duracion total: <?php echo $duracionTotal; ?> </li>
        <li> Precio total: $<?php echo $precioTotal; ?> </li>
    </ul>

    <?php
        define("CONSTANTE", "Hola mondo ");
        echo CONSTANTE;

        define("COMIDAS", array ("milanga ", "pollo", "fideos"));
        echo COMIDAS [0];

        const COMIDAS2 = "con fritas y ";
        echo COMIDAS2;

        const BEBIDAS = array ("agua", "coca");
        echo BEBIDAS [1];
    ?>
</body>
</html>