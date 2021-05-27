<?php
include 'conexion.php';
$db_table_name="clientes";
if (!$link) {
	die('No se ha podido conectar a la base de datos');
}
$subs_dui = utf8_decode($_POST['id_dui']);
$subs_nit = utf8_decode($_POST['nit']);
$subs_name = utf8_decode($_POST['nombres']);
$subs_last = utf8_decode($_POST['apellidos']);
$subs_direccion = utf8_decode($_POST['direccion']);
$subs_phone = utf8_decode($_POST['telefono']);
$subs_contry = utf8_decode($_POST['pais']);
$subs_email = utf8_decode($_POST['correo']);
$subs_refna = utf8_decode($_POST['refe_nombre']);
$subs_refpho = utf8_decode($_POST['refe_telefono']);
$subs_licen = utf8_decode($_POST['licencia']);

?>