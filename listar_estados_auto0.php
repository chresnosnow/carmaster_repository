<?php
//hacemos el llamado respectivo
include './conexion.php';
//inciamos la consulta			
$sql1= "SELECT * FROM autos WHERE estado = '0'";
$ejecuta_sentencia1 = mysqli_query($link, $sql1);
//proxima
$sql2= "SELECT * FROM autos WHERE estado = '2'";
$ejecuta_sentencia2 = mysqli_query($link, $sql2);
 
?>