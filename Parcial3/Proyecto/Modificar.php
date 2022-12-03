<?php
$nombre=$_POST['Nom'];
$Direccion=$_POST['Dir'];
$Curp=$_POST['Cur'];
$Nacionalidad=$_POST['Nac'];
$Numero=$_POST['Num'];
$Ciudad=$_POST['Ciud'];
$Estado=$_POST['Est'];
$Codigo=$_POST['Cod'];
$servidor="localhost";
$basedatos="ejemplo";
$usuario="root";
$password="17112001";


$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta= "Update datos set nombre='$nombre',Direccion='$Direccion',Curp='$Curp',Nacionalidad='$Nacionalidad',Numero='$Numero',
Ciudad='$Ciudad',Estado='$Estado',Codigo='$Codigo' WHERE  nombre ='$nombre'" ;
$consulta = $con -> prepare($consulta);
$consulta -> execute();
$consulta->closeCursor();


?>