<?php
    $destinatario = 'yoideryancy@gmail.com';
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['message'];

    $header = "Mensaje enviado atravez de la pagina de alquiler de yates santa marta.";
    $header .= "\nDe: ".$nombre."\nDireccion de correo: " . $correo;
   

    mail($destinatario, $asunto, $mensaje, $header);
    header("Location:../index.php");

?>