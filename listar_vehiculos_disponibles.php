
<?php
//hacemos el llamado respectivo
include './conexion.php';
//inciamos la consulta			
$sql= "SELECT * FROM autos WHERE estado = '1'";
$ejecuta_sentencia = mysqli_query($link, $sql);
 
?>