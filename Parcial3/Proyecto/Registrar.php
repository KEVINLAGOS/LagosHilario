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
$consulta= "Insert into datos (nombre, Direccion, Curp, Nacionalidad, Numero, Ciudad, Estado, Codigo)
VALUES ('$nombre','$Direccion','$Curp','$Nacionalidad','$Numero','$Ciudad','$Estado','$Codigo')" ;
$consulta = $con -> prepare($consulta);
$consulta -> execute();
$consulta->closeCursor();


?>