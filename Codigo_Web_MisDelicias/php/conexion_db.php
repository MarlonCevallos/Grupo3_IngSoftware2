<?php
$conexion = mysqli_connect("localhost", "root", "", "misdelicias_db");
if($conexion){
    echo 'La conexión a la BDD se realizó con éxito';
}else{
    echo 'Error no se pudo conectar a la BDD';
}
?>