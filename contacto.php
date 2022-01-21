<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Contacto</title>
</head>
<body>
    <?php
    include ("header.php")
    ?>
    <h1>Contacto</h1>
    <section class="contacto_contenido">
        <form action="enviar_consulta.php" method="POST" >
            <input type="text" name="nombre" placeholder="Nombre" class="contacto_input input-group-text" require>
            <br>
            <input type="text" name="apellido" placeholder="Apellido" class="contacto_input input-group-text" require>
            <br>
            <input type="email" name="correo" placeholder="Email" class="contacto_input input-group-text" require>
            <br>
            <textarea name="mensaje" placeholder="Mensaje" id="" cols="21" rows="10" class="contacto_input input-group-text" require></textarea>
            <br>
            <input type="submit" value="Enviar" class="contacto_btn input-group-text">
            <br>
        </form>
    </section>

    <?php
        if(isset($_GET ["e"])){
            echo "<h3> Mensaje enviado con éxito </h3>";
        }
    ?>
    
</body>
</html>