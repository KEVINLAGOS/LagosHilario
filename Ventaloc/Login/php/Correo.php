<?php
// Varios destinatarios
$para  = 'ejemplo@example.com' ; 

// título
$título = 'Codigo de verificacion';
$codigo =  rand(1000,9999);
// mensaje
$mensaje = '
<html>
<head>
  <title></title>
</head>
<body>
  <p>Tu codigo de verificacion es:</p>
  <p> <a 
     href="http://localhost/lagoshilario/Ventaloc/Login/php/Confirmar.php?correo='.$correo.'">
    Verificar cuenta </a> 
    </p>
  <h2>'.$codigo.'<h2>

</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: User <User@example.com>' . "\r\n";
$cabeceras .= 'From: Ejemplo <ejemplo@example.com>' . "\r\n";
$cabeceras .= '' . "\r\n";
$cabeceras .= '' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
?>