<?php
include 'Conexion.php';
$correo=$_POST['email'];
$codigo =$_POST['codigo'];
    $res = $conexion->query("select * from usuarios where Correo='$correo' 
        and codigo='$codigo' 
        ")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        echo "TODO CORRECTO";
        $conexion->query("update usuarios set confirmado = 'si' WHERE Correo = '$correo' ");
    
        echo ' <script>
        alert("Todo Bien Sera Redireccionado");
       window.location="../index.php";
       </script>';
    }else{
        echo ' <script>
        alert("Verificacion CorrectaSera Redireccionado");
       window.location="../Confirmar.php";
       </script>';
    }
?>