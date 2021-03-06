<?php

    // VARIABLES
    $valor1 = @$_POST['valor1'];
    $opc1 = @$_POST['opcion'];
    
    $euroP = 3532.09;
    $dolarP = 3002.25;
    $euroD = 1.18;
    
    // FUNCIONES
    
    function conversorValores ( $val1){
        global $opc1, $dolarP, $euroP, $euroD;
        switch ( $opc1) {
            case '1':
                echo (  $val1 / $dolarP  )." Dolares"; 
                break;
            case '2':
                echo ($val1 * $dolarP)." Pesos"; 
                break;
            case '3':
                echo ($val1 * $euroP). " Pesos"; 
                break;
            case '4':
                echo ($val1 / $euroP). " Euros"; 
                break;
            case '5':
                echo ($val1 * $euroD)." Dolares"; 
                break;
            case '6':
                echo ($val1 / $euroD)." Euros"; 
                break;
            
        }
    }
?>
    
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


<div class="container  col-12 " style="height:350px" >
 <div class="mt-5 pt-5">
        <div class="d-flex justify-content-center ">
           <p class="display-4 font-weight-bold"> El resultado es: <?php conversorValores($valor1) ?></p>
        </div>
      <div class="d-flex justify-content-center" >
       <a href="conversor.html" style="text-decoration: none">
       <i class="material-icons " style="font-size:80px">arrow_back</i>
      
           
           </a>
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
</html>
