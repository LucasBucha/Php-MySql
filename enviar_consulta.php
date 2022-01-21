<?php

$nombre_form=$_POST["nombre"];
$apellido_form=$_POST["apellido"];
$correo_form=$_POST["correo"];
$mensaje_form=$_POST["mensaje"];

$cuerpo_mail = "Nombre: ".$nombre_form."\r\n" ."Apellido: ".$apellido_form."\r\n"."Correo electronico: ".$correo_form."\r\n"."Mensaje: ".$mensaje_form;

mail("lf.buchaillot@gmail.com", "mensaje enviado desde nuestrositio.com", $cuerpo_mail);

    // --------------- PARA USAR EN WEB HOST ---------------
    // $conexion = mysqli_connect("localhost","id18318195_lucasbuchaillot", "]a!HQ>*K}97h6j&E", "id18318195_buchaillotlucas");


    // --------------- PARA USAR EN LOCAL HOST ---------------
$conexion = mysqli_connect("localhost","root", "", "php_inicial");

mysqli_query($conexion, "INSERT INTO php_inicial VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$correo_form', '$mensaje_form')");

mysqli_close($conexion);
    
header("Location:  contacto.php?e=ok");