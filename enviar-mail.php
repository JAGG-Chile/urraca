<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if( !empty($name) and ( !empty($email) or !empty($phone) ) ){
    //enviar correo
    $to         = "ventas@urraca.cl";
    $subject    = "Tienes un mensaje de un contacto desde sitio web URRACA.CL";
    $message    ="Datos de contacto desde sitio web.<br>
              Nombre: ".$name."<br>Email: ".$email."<br>Teléfono: ".$phone;
    $headers    ="MIME-Version: 1.0\r\n";
    $headers    .="Content-type: text/html; charset=utf-8\r\n";  //iso-8859-1
    $headers    .="From: Urraca.cl <contacto@urraca.cl>\r\n";
    
    $enviado    = mail($to,$subject,$message,$headers);

    if($enviado){
        header('location:correo-enviado.php');
    }else{
        header('location:correo-fallido.php');
    }
}
?>