<?php
include 'conexion.php';
include 'vehiculos_form.php';
if (!$link) {
	die('No se ha podido conectar a la base de datos');
}
//$resultado=mysqli_query("SELECT * FROM ".$db_table_name." WHERE id_placa = '".$subs_placa."'", $link);

//if (mysqli_num_rows($resultado)>0)
//{
//
//} else {
	
$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`id_placa` , `modelo` , `marca` , `color` , `kilometraje` , `anno`, `tipo_carroceria` , `cilindraje` , `transmision` , `pasajeros` , `estado`) VALUES ( "' . $subs_placa . '", "' . $subs_mod . '", "' . $subs_marca . '", "' . $subs_color . '", "' . $subs_kilo . '", "' . $subs_anno . '", "' . $subs_tipo . '", "' . $subs_cili . '", "' . $subs_trans . '", "' . $subs_pasa . '", "' . $subs_estado . '" )';

mysqli_select_db($link, $db_name);
$retry_value = mysqli_query($link, $insert_value);

if (!$retry_value) {
   die('Error: ' . mysqli_error($link));
   //header('Location: Fail.html');
}
//}
mysqli_close($link);
header('Location: vehiculos.php');
		
?>