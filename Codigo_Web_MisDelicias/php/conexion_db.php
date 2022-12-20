<?php

$conexion = mysqli_connect("localhost", "root", "", "misdelicias_db");
if($conexion){
    echo 'Se conectó correctamente a la BDD';
}else{
    echo 'Error no se pudo conectar a la BDD';
}
?>