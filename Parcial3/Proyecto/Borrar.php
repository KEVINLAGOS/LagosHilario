<?php
$nombre=$_POST['par1'];
$servidor="localhost";
$basedatos="ejemplo";
$usuario="root";
$password="17112001";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta= "Delete from datos where nombre ='$nombre'";
$consulta = $con -> prepare($consulta);
$consulta -> execute();
$consulta->closeCursor();
?>