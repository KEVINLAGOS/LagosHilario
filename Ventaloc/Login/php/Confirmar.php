<?php 
if(isset($_GET['correo'] )){
    $correo = $_GET['correo'] ;
  
}else{
    header('Location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Cuenta</title>
    <!-- CSS only -->
<link rel="stylesheet"  href="../Recursos/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
            <form class="col-3" action="./verificar.php" method="POST">
                <h2>Verificar Cuenta</h2>
                <div class="mb-3">
                    <label for="c" class="form-label">Código de Verificación</label>
                    <input type="number" class="form-control" id="c" name="codigo">
                    <input type="hidden" class="form-control" id="email" name="email" value="<?php echo $correo;?>">

                </div>
               
                <button type="submit" class="btn btn-primary">Verificar</button>
            </form>
        </div>
    </div>
    <script src="../Recursos/jquery-3.6.1.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script link rel="stylesheet"  href="../Recursos/bootstrap.min.css"></script>
</body>
</html>