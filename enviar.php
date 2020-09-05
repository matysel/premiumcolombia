<?php
$destino= "premiumdigital@gmail.com";
$nombre = $_POST["nombre"];
$nombre = $_POST["correo"];
$nombre = $_POST["telefono"];
$nombre = $_POST["mensaje"];
$contenido= "Nombre: " .$nombre . "\nCorreo: " . $correo . "\nTelefono: " .$telefono . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("gracias.html")
?>