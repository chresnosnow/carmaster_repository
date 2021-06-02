<?php
include 'conexion.php';
include 'contrato_form.php';

if (!$link) {
	die('No se ha podido conectar a la base de datos');
}
$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`id_contrato` , `id_dui` , `id_placa` , `nombre_cliente` , `fechini` , `fechafin`, `costo` , `estado`) VALUES ( "' . $subs_contr . '", "' . $subs_dui . '", "' . $subs_placa . '", "' . $subs_namlas . '", "' . $subs_fechi . '", "' . $subs_fechf . '", "' . $subs_cost . '", "' . $subs_esta . '" )';

mysqli_select_db($link, $db_name);
$retry_value = mysqli_query($link, $insert_value);

if (!$retry_value) {
   die('Error: ' . mysqli_error($link));
}

mysqli_close($link);
header('Location: cards copy.html');
?>