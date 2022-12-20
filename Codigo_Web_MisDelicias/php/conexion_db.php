<?php

$conexion = mysqli_connect("localhost", "root", "", "misdelicias_db");
if($conexion){
    echo 'Conectado';
}else{
    echo 'Error no se pudo conectar a la BDD';
}
?>