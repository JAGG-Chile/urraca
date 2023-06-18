<?php

$name = $_POST['nombre'];
$email = $_POST['email'];
$phone = $_POST['telefono'];
$message = $_POST['mensaje'];


    //enviar correo
    $to         = "informatico.juangarcia@gmail.com";
    $subject    = "Tienes un mensaje desde sitio web CODERLAND.";
    $message    ="Datos de contacto desde sitio web.<br>
              Nombre: ".$name."<br>Email: ".$email."<br>Teléfono: ".$phone."<br>Mensaje: ".$message;
    $headers    ="MIME-Version: 1.0\r\n";
    $headers    .="Content-type: text/html; charset=utf-8\r\n";  //iso-8859-1
    $headers    .="From: Sitio www.coderland.cl <contacto@coderland.cl>\r\n";
    
    $enviado    = mail($to,$subject,$message,$headers);

    if($enviado){
        header('location:correo-enviado.php');
    }else{
        header('location:correo-fallido.php');
    }

?>