<?php
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $mensaje=$_POST['mensaje'];

    $enviar_destino="bboyace10@gmail.com";
    $asunto="Consulta enviada desde la web";

    $sms="Nombre :".$nombre."\r\n";
    $sms.="Email :".$email."\r\n";
    $sms.="Mensaje :".$mensaje."\r\n";

    $remitente="From: algo@live.com";

    mail($enviar_destino, $asunto, $sms, $remitente);

    header("Location:index.php?i=ok");

?>