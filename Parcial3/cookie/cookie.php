<!DOCTYPE html>
<html lang="en">
<?php

$FechaHoy = date('d/m/y H:i:s');

$SiguienteSemana = time() + (7*4*60*60);

$FechaExpira = date('d/m/y H:i:s',$SiguienteSemana) . '<br>';



echo '<b> Fecha de creacion de cookie: </b>'.$FechaHoy.'<br>';
echo  '<b> Fecha de expiracion de cookie: </b>'.$FechaExpira.'<br>';
setcookie("Ultima_visita",$FechaHoy,time()+(7*24*60*60));

?>

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>