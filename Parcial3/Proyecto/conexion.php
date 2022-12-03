<?php
$id= $_POST['par1'];  
$servidor="localhost";
$basedatos="ejemplo";
$usuario="root";
$password="17112001";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta="select * from datos where Nombre='$id'";
$registros= mysqli_query($con,$consulta) or die("problemas");

$result= mysqli_fetch_array($registros,MYSQLI_ASSOC);
echo json_encode($result);



?>