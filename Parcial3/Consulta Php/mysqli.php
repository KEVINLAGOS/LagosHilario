<?php
$servidor="localhost";
$basedatos="ejemplo";
$usuario="root";
$password="17112001";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta="select * from datos";
$registros= mysqli_query($con,$consulta) or die("problemas");

$result=mysqli_fetch_all($registros);
mysqli_close($con);
echo json_encode($result);



?>