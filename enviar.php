<?php
//se llama a los campos
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];


//datos para el correo

$destinatario = "contactanos@techandwave.com";
$asunto = "Contacto desde Techandwave"; 

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

//enviando mensaje

mail($destinatario, $asunto, $carta);
header('Location:mensajeenvio.php')


?>