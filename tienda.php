<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <section class="tienda">
        <h1> Tienda </h1>
        <nav class="tienda_botonera">
            <ul class="list-group" >
                <li class="list-group-item"> <a href="tienda.php?producto=pz"> Pizza </a></li>
                <li class="list-group-item"> <a href="tienda.php?producto=em"> Empanada </a></li>
                <li class="list-group-item"> <a href="tienda.php?producto=ps"> Postres </a></li>
            </ul>
        </nav>
    </section>
    <div>
        <h1><?php echo @$_GET["precio"]; ?></h1>
    </div>
    <!-- ESTRUCTURAS DE CONTROL -->

    <?php

    if (isset($_GET['producto'])) {
        switch ($_GET['producto']) {
            case "pz":
                $producto = "PIZZA";
                $ingredientes = "Tomate, rucula y parmesano";
                $precio = "$ 1000";
                $img = 'images/pizza.jpg';
                echo "<h2>$producto</h2>";
                echo "<h3>$ingredientes</h3>";
                echo "<h3>$precio</h3>";
                echo "<img src='$img'>";
                break;

            case "em":
                $producto = "EMPANADA";
                $ingredientes = "Salteña";
                $precio = "$ 500";
                $img = "images/empanada.jpg";
                echo "<h2>$producto</h2>";
                echo "<h3>$ingredientes</h3>";
                echo "<h3>$precio</h3>";
                echo "<img src='$img'>";
                
                break;

            case "ps":
                $producto = "POSTRE";
                $ingredientes = "Flan con dulce de leche";
                $precio = "$ 200";
                $img = "images/flan.jpg";
                echo "<h2>$producto</h2>";
                echo "<h3>$ingredientes</h3>";
                echo "<h3>$precio</h3>";
                echo "<img src='$img'>";
                break;
            }
        }
    ?>


</body>

</html>