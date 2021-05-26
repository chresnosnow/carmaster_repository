<?php
//hacemos el llamado respectivo
include './conexion.php';
//inciamos la consulta			
$sql= "SELECT * FROM contratos WHERE estado = '1'";
$ejecuta_sentencia = mysqli_query($link, $sql);
 
?>