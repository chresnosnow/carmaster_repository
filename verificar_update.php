<?php
include 'conexion.php';
include 'usuario_form.php';
if (!$link) {
	die('No se ha podido conectar a la base de datos');
}
$insert_value = 'UPDATE `' . $db_name . '`.`'.$db_table_name.'` SET `nit` = "' . $subs_nit . '" , `nombres` = "' . $subs_name . '" , `apellidos` = "' . $subs_last . '" , `direccion` = "' . $subs_direccion . '" , `telefono` = "' . $subs_phone . '" , `pais` = "' . $subs_contry . '" , `correo` = "' . $subs_email . '" , `refe_nombre` = "' . $subs_refna . '" , `refe_telefono` = "' . $subs_refpho . '" , `licencia` = "' . $subs_licen .'" WHERE `id_dui` = "' . $subs_dui . '" ';

mysqli_select_db($link, $db_name);
$retry_value = mysqli_query($link, $insert_value);

if (!$retry_value) {
   die('Error: ' . mysqli_error());
}

mysqli_close($link);
header('Location: index.html');
		
?>