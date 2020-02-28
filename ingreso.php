<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <title>Administrador de Productos</title>


</head>
    <?php

require 'conexion.php';

session_start();
if (isset($_POST['nombre-usuario'])) {
    $usuario = $_POST['nombre-usuario'];
    $contraseña = $_POST['contraseña-usuario'];

    $query = "SELECT * FROM 'usuarios'  WHERE nombre_usuario = '$usuario'
        and contraseña_usuario = '" . md5($$contraseña) . "' ";
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['nombreUsuario'] = $nombreUsuario;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (3600);

        header("Location: index.php");
    } else {
        echo "<div class='form'>
<h3>Username/password incorrectos.</h3>
<br/>Click aquí <a href='ingreso.php'>Login</a></div>";
    }
} else {

    ?>
<style>
    html,body{
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>
<body>

   <div class="container bg-dark col-sm-12 p-2 "  style="height:200px">

        <div class="d-flex justify-content-center mt-4">
            <div class="d-flex align-items-center">
                <i class="material-icons " style="font-size:100px; color:white">store</i>
            </div>
            <h1 class="display-1 font-weight-bold text-center text-white">ProducSoft</h1>
        </div>

   </div>

   <div class="menu">
   <nav class="navbar navbar-expand-sm bg-dark">

    <!-- Links -->



    </nav>
</div>

<div class="container  col-12  " style="height:340px" >
    <div class="mt-5">
        <div class="d-flex justify-content-center ">
            <form action="" method="POST">

                <div class="d-flex justify-content-around mb-4">

                    <p>Usuario:</p>
                    <div class="col-xs-2">

                        <input  class="form-control" type="text" name="usuario" placeholder="nombreUsuario" id="">
                    </div>
                </div>

                <div class="d-flex justify-content-around mb-4">

                    <p>Contraseña:</p>
                    <div class="col-xs-2">

                        <input  class="form-control" type="text" name="contraseña" id="">
                    </div>
                </div>
                <div class=" d-flex justify-content-center" >
                    <input class="btn " type="button" value="Ingresar">
                </div>
            </form>
            </div>
    </div>
</div>

<footer>
    <div class="container bg-dark col-md-12 pt-4" style="height:100px" >
        <div class="text-white " style="line-height:0.5" >
            <p>William G. Navarro</p>
            <p>Codigo: 1.094.915.177</p>
        </div>

    </div>
</footer>

</body>
<?php }?>
</html>