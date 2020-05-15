<?php

    $destino= "callejeritosvillaelisa@gmail.com";
    $nombre= $_Post["name"];
    $correo= $_Post["email"];
    $telefono= $_Post["phone"];
    $message= $_Post["message"];
    $contenido= "name" . $nombre . "\nemail" . $correo . "\nphone" . $telefono . "\nmessage" . $message;
    mail($destino,"contacto", $contenido);
    heaeder("#modal")

?>