<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

$sql="SELECT * FROM comercial_info ORDER BY come_info_id";
$tabla=$db->sub_tuplas($sql);
$p1->assign("tabla_comercial",$tabla);
?>