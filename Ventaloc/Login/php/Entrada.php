<?php
session_start();

include 'Conexion.php';
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$clave = hash('sha512',$clave);


$validar= mysqli_query($conexion," SELECT * FROM usuarios WHERE usuario='$usuario'
and clave='$clave'");

if(mysqli_num_rows($validar) > 0){
    $_SESSION['usuario']=$usuario;
    header("location: ../bienvenida.php");
exit();
}
else{
    echo'
    <script>
    alert("Usuario no existe");
    window.location="../index.php";
    </script>
    ';
    exit();
}
?>