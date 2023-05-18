<?php
include 'Conexion.php';
$nombre=$_POST['nombre'];
$ap=$_POST['ap'];
$am=$_POST['am'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$Tipo=$_POST['Tipo'];
$clave=$_POST['clave'];
$clave=hash('sha512',$clave);
include "./Correo.php";
$query="INSERT INTO `usuarios`( `nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Correo`, `Usuario`, `TipoUsuario`, `Clave`, `Codigo`, `Confirmado`) 
VALUES ('$nombre','$ap','$am','$correo','$usuario','$Tipo','$clave','$codigo','No')";
//verificar que el correo no se repita en la base de datos

$verificar=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' ");
if(mysqli_num_rows($verificar)>0){
echo' 
<script>
alert("Este correo ya esta registrado,intenta con otro diferente");
window.location="../index.php";
</script>
';
exit();
}
//verificar que el usuario no se repita en la base de datos

$verificarusuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' ");
if(mysqli_num_rows($verificarusuario)>0){
echo' 
<script>
alert("Este usuario ya esta registrado,intenta con otro diferente");
window.location="../index.php";
</script>
';
exit();
}
$ejecutar =mysqli_query($conexion,$query);
if($ejecutar){
    echo'
    <script>
    alert ("Usuario Almacenado Correctamente");
    window.location="../index.php";
    </script>
    ';
}
else{
  

    echo'
    <script>
    alert ("Intentalo De nuevo,usuario no almacenado");
    window.location="../index.php";
    </script>
    
    ';
}
mysqli_close($conexion);

?>