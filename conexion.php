<?php

$con = mysqli_connect("localhost", "root", "12345678", "bdunad40");
if (!$con) {

    echo "la conexión fallo" . mysqli_connect_error();

} else {
    echo "conexion con la base correctamente";
}
