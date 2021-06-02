<?php
include 'conexion.php';
include 'usuario_form.php';
if (!$link) {
	die('No se ha podido conectar a la base de datos');
}
$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`id_dui` , `nit` , `nombres` , `apellidos` , `direccion` , `telefono`, `pais` , `correo` , `refe_nombre` , `refe_telefono` , `licencia`) VALUES ( "' . $subs_dui . '", "' . $subs_nit . '", "' . $subs_name . '", "' . $subs_last . '", "' . $subs_direccion . '", "' . $subs_phone . '", "' . $subs_contry . '", "' . $subs_email . '", "' . $subs_refna . '", "' . $subs_refpho . '", "' . $subs_licen . '" )';

mysqli_select_db($link, $db_name);
$retry_value = mysqli_query($link, $insert_value);

if (!$retry_value) {
    die('Error: ' . mysqli_error());
 }
 
 mysqli_close($link);
 header('Location: cards copy.html');

?>