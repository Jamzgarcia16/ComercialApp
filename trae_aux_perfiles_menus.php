<?php
include '../../config_comercial/config_comercial6.php';
if (isset($_POST["id_perfil"])) {
    $sql="SELECT * FROM aux_perfiles_menus ORDER BY id_aux";
    $db = new subase(); # Creamos el objeto $db: instancia de la clase subase
    if ($fila=$db->sub_fila($sql)) {
        $tabla=$db->sub_tuplas($sql);
        echo(json_encode($fila));
    }
}
?>

