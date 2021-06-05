<?php
include 'conexion.php';
include 'contrato_form.php';
if (!$link) {
	die('No se ha podido conectar a la base de datos');
}
$insert_value = 'UPDATE `' . $db_name . '`.`'.$db_table_name.'` SET  `id_placa` = "' . $subs_placa . '" , `nombre_cliente` = "' . $subs_namlas . '" , `fechini` = "' . $subs_fechi . '" , `fechafin` = "' . $subs_fechf . '" , `costo` = "' . $subs_cost . '" , `estado` = "' . $subs_esta . '" WHERE `id_contrato` = "' . $subs_contr . '" ';

mysqli_select_db($link, $db_name);
$retry_value = mysqli_query($link, $insert_value);

if (!$retry_value) {
   die('Error: ' . mysqli_error($link));
}

mysqli_close($link);
header('Location: cards devo.html');
		
?>