<?php
include 'conexion.php';
$db_table_name="autos";
if (!$link) {
	die('No se ha podido conectar a la base de datos');
}
$subs_placa = utf8_decode($_POST['id_placa']);
$subs_mod = utf8_decode($_POST['modelo']);
$subs_marca = utf8_decode($_POST['marca']);
$subs_color = utf8_decode($_POST['color']);
$subs_kilo = utf8_decode($_POST['kilometraje']);
$subs_anno = utf8_decode($_POST['anno']);
$subs_tipo = utf8_decode($_POST['tipo_carroceria']);
$subs_cili = utf8_decode($_POST['cilindraje']);
$subs_trans = utf8_decode($_POST['transmision']);
$subs_pasa = utf8_decode($_POST['pasajeros']);
$subs_estado = utf8_decode($_POST['estado']);
?>