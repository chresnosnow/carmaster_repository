<?php
//Conectar con el servidor para pruebas
//$link=mysqli_connect('localhost','root','');
//Conexión al servidor remoto
$link=mysqli_connect('dbcarmaster.mysql.database.azure.com','carmasteradmin@dbcarmaster','yayoPACO56gan6');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'carmaster_test');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //echo 'Conectado satisfactoriamente';
    }
    }
	
?>

