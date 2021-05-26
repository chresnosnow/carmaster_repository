<?php
//hacemos el llamado respectivo
include './conexion.php';
//inciamos la consulta			
$sql= "SELECT * FROM clientes";
$ejecuta_sentencia = mysqli_query($link, $sql);
 
?>