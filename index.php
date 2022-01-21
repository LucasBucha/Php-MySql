<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<?php
    include("header.php")
?>
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