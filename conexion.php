<?php
//Conectar con el servidor para pruebas
//$link=mysqli_connect('localhost','root','');
//Conexión al servidor remoto
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="carmaster_test";
$link=mysqli_connect($db_host, $db_user, $db_password);
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, $db_name);
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //echo 'Conectado satisfactoriamente';
    }
    }
	
?>

