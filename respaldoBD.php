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
<style>
    html{
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    
    // INGRESAR DATOS TABLA 
    $host= "localhost";
    $user = "root";
    $pass="12345678";
    $database="bdunad40";
    $date = date('d-m-Y-H-i-s');
   
    $sqlDump = '"C:\AppServ\MySQL\bin\mysqldump.exe"';
    $backup_file = '"C:\AppServ\www\fase_2\archivos\"'.$database. "-" .$date. ".sql";
    system("$sqlDump  -h $host -u $user -p $pass $database > $backup_file");
?>

<body>
    
   <div class="container bg-dark col-sm-12 p-2 " >

        <div class="d-flex justify-content-center">
            <div class="d-flex align-items-center">
                <i class="material-icons " style="font-size:80px; color:white">store</i>
            </div>
            <h1 class="display-1 font-weight-bold text-center text-white">ProducSoft</h1>
        </div>

   </div>
   
   <div class="menu">
   <nav class="navbar navbar-expand-sm bg-dark">

    <!-- Links -->

    <ul class="nav ">
            <li class="nav-item">
                <a class="nav-link " href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="administrador.html">Administrador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registro-producto.html">Registro de Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="consulta-productos.html">Consulta de Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="actualizar-producto.html">Actualización de Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reportes-especiales.html">Reportes Especiales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="operaciones.html">Operaciones Matemáticas</a>


            </li>
        </ul>
        
    </nav> 
</div>

<div class="container  col-12 mt-5 mb-4" >
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 ">
            <div class="  border border-dark col-12 p-4">
                

                    <!-- -------------------------------------------------------- -->




            </div>

        </div>
        <div class="col-2"></div>
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
</html>
