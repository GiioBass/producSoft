<?php

    // VARIABLES
    $valor1 = @$_GET['valor1'];
    $opc1 = @$_GET['opcion'];
    
    $euroP = 3532.09;
    $dolarP = 3002.25;
    $euroD = 1.18;
    
    // FUNCIONES
    
    function conversorValores ( $val1){
        global $opc1, $dolarP, $euroP, $euroD;
        switch ( $opc1) {
            case '1':
                return (  $val1 / $dolarP  )." Dolares"; 
                break;
            case '2':
                return ($val1 * $dolarP)." Pesos"; 
                break;
            case '3':
                return ($val1 * $euroP). " Pesos"; 
                break;
            case '4':
                return ($val1 / $euroP). " Euros"; 
                break;
            case '5':
                return ($val1 * $euroD)." Dolares"; 
                break;
            case '6':
                return ($val1 / $euroD)." Euros"; 
                break;
            
        }
    }
?>
    
    // echo $opc1.'<br>';  
    // // echo ($valor1 * $dolar);
    // echo conversorValores($valor1);
    
    // ___________________________
   echo '<!DOCTYPE html>';
    echo '<html lang="en">';
   echo '<head>';
       echo  '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<meta http-equiv="X-UA-Compatible" content="ie=edge">';
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">';
        echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>';
        echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">';
        
        echo '<title>Administrador de Productos</title>';
    echo '</head>';
    // echo '<style>';
    //     echo 'html{font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}';
    // echo '</style>';
 echo "<body>";
    
   echo '<div class="container bg-dark col-sm-12 p-2 " >';

      echo '<div class="d-flex justify-content-center">';
           echo '<div class="d-flex align-items-center">';
               echo '<i class="material-icons " style="font-size:80px; color:white">store</i>';
            echo "</div>";
           echo '<h1 class="display-1 font-weight-bold text-center text-white">ProducSoft</h1>';
        echo "</div>";

   echo "</div>";
   
  echo '<div class="menu">';
   echo '<nav class="navbar navbar-expand-sm bg-dark">';

    // <!-- Links -->

      <ul class="nav ">
            <li class="nav-item">
                <a class="nav-link " href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Administrador</a>
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
        
    echo '</nav> ';
echo '</div>';


echo '<div class="container  col-12 " style="height:350px" >';
   echo '<div class="mt-5 pt-5">';
        echo '<div class="d-flex justify-content-center ">';
           echo '<p class="display-4 font-weight-bold"> El resultado es: ' .conversorValores($valor1). '</p>';
        echo '</div>';
       echo '<div class="d-flex justify-content-center" >';
       echo '<a href="conversor.html" style="text-decoration: none">';
       echo '<i class="material-icons " style="font-size:80px">arrow_back</i>';
      
           
            echo '</a>';
       echo  '</div>';
    echo '</div>';
echo '</div>';

echo '<footer>';
    echo '<div class="container bg-dark col-md-12 pt-4" style="height:100px" >';
       echo '<div class="text-white " style="line-height:0.5" >';
            echo '<p>William G. Navarro</p>';
           echo' <p>Codigo: 1.094.915.177</p>';
       echo' </div>';
        
    echo '</div>';
echo '</footer>';

echo '</body>';
echo '</html>';
?>