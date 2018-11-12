

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

$num1 = @$_POST["num1"];
$num2 = @$_POST["num2"];
$num3 = @$_POST["num3"];
$num4 = @$_POST["num4"];
$num5 = @$_POST["num5"];
$opcion= @$_POST["opcion"];


   

   
   function multiplicarNumeros ($a, $b, $c, $d, $e){
       $numeros  = array( $a, $b, $c, $d, $e);
       echo 'Los numeros multiplicados por el numero de grupo colaborativo son: ' ;
       echo '<br>';
       
       for ($i=0; $i < count($numeros); $i++) { 
           
           echo ($numeros[$i] * 40) . "\n";
           
       }
       echo '<br>';
   }
   
   function ordenarNumeros($a, $b, $c, $d, $e){
       $numerosOrden = array( $a, $b, $c, $d, $e);
       echo 'La cantidad de elementos son:  ' . count($numerosOrden);
       echo '<br>';
       sort($numerosOrden);
       
       foreach ($numerosOrden as $clave => $valor) {
           
           echo   $valor . "\n";
           
           
       }
       
       echo '<br>';
       
   }


   function  eliminarNum($a, $b, $c, $d, $e ,$f){

       $numerosEliminar  = array($a, $b, $c, $d, $e);
       
       unset($numerosEliminar[$f]);
       echo 'Numeros ingresados sin el numero eliminado <br>';
       for ($i=0; $i < count($numerosEliminar); $i++) { 
           echo $numerosEliminar[$i] . ' ' ;
        }
    }

    ?>

<style>
    html{
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>
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

<div class="container  col-12 mt-5 mb-4" ">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 ">
            <div class="border border-dark col-12 p-4" style ="height:300px">
                
                   <?php 

                   echo '<p class="display-5 font-weight-bold">';
                   multiplicarNumeros( $num1, $num2, $num3, $num4, $num5 );
                   echo '</p>';
                   echo '<p class="display-5 font-weight-bold">';
                   ordenarNumeros( $num1, $num2, $num3,  $num4, $num5 );
                   echo '</p>';
                   echo '<p class="display-5 font-weight-bold">';
                   eliminarNum( $num1, $num2, $num3,  $num4, $num5, $opcion );
                   echo '</p>';


                   
                   


                   ?>
                   
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


    
    
    
       
       
      




  
    
   
    

