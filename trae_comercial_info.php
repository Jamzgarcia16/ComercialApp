<?php
include '../../config_conjunto/config_conjunto6.php';


if (isset($_POST["come_info_id"])) {
    $sql="SELECT * FROM comercial_info WHERE come_info_id=".$_POST["come_info_id"];
    $db = new subase(); # Creamos el objeto $db: instancia de la clase subase
    if ($fila=$db->sub_fila($sql)) {
        $tabla=$db->sub_tuplas($sql);
        echo(json_encode($fila));
    }
}

?>