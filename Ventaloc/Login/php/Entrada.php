<?php
session_start();

include 'Conexion.php';
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$clave = hash('sha512',$clave);

$validar= mysqli_query($conexion," SELECT * FROM usuarios WHERE usuario='$usuario'
and clave='$clave' ");
$codigov= mysqli_query($conexion,"SELECT * FROM usuarios where usuario='$usuario' and Confirmado='si'");
//Validar que hay registrados usuarios en caso de ser asi comprueba el usuario si esta
//posteriormente verifica  la clave concida en caso de que no el usuario no esta registrado

if(mysqli_num_rows($validar)== 1){

      if(mysqli_num_rows($codigov)== 1){
 
        $_SESSION['usuario']=$usuario;
      header("location: ../Interfaz.php");
      exit();

    }
                else{
                  echo'
                  <script>
                alert("Usuario no verificado\n Favor de verificar el codigo");
              window.location="../index.php";
              </script>
                '; 
                exit();}
    }

  else{
        echo'
         <script>
       alert("Usuario y/o contraseñas incorrectos");
      window.location="../index.php";
      </script>
        '; 
        exit();}
        
        
?>