<?php
/* Smarty version 3.1.32, created on 2020-04-02 02:27:00
  from 'C:\xampp\tpl_comercial\ComercialPrueba6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e8531548e94c3_93546194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5453c7e17fdef7d9226a20f04a7a5a9364be92a' => 
    array (
      0 => 'C:\\xampp\\tpl_comercial\\ComercialPrueba6.tpl',
      1 => 1585711539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8531548e94c3_93546194 (Smarty_Internal_Template $_smarty_tpl) {
?>Bienvenido Comercial

<div><h3>ADMINISTRACIÓN COMERCIALES</h3></div>
<table id="tabla1" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Editar</th>
            <th>ID</th>
            <th>Nombre Comercial</th>
            <th>Apellido</th>
            <th>EPS</th>
            <th>Correo</th>
            <th>Clave</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_comercial']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
  <tr>
    <td style="text-align: center;">
      <a href="#" title="Editar" data-toggle="modal" data-target="#myModal"  onclick="return editar(<?php echo $_smarty_tpl->tpl_vars['fila']->value['come_info_id'];?>
,this.parentNode.parentNode.id);"><i class="fa fa-edit" style="font-size:24px; color:blue;"></i></a>
    </td>
    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['come_info_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['come_info_nombre'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['come_info_apellido'];?>
</td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align: center;">
      <a href="#" title="Eliminar" data-toggle="modal" data-target="#myModal" onclick="return eliminar(<?php echo $_smarty_tpl->tpl_vars['fila']->value['come_info_id'];?>
,this.parentNode.parentNode.id);"><i class="fa fa-trash-o" style="font-size:24px; color:red;"></i></a>
    </td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
    <tfoot>
        <tr>
            <th>Editar</th>
            <th>ID</th>
            <th>Nombre Comercial</th>
            <th>Apellido</th>
            <th>EPS</th>
            <th>Correo</th>
            <th>Clave</th>

            <th>Borrar</th>
        </tr>
        <tr>
            <th colspan="2" style="text-align: center;"><a href="#"  data-toggle="modal" data-target="#myModal" onclick="return adicionar();"><i class="fa fa-plus-square" style="font-size:24px;color:green"></i> Adicionar </a></th>
            <th colspan="2">
            <button onclick="cargar_reporte();"><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i> Reporte </button>
            </th>
            <th colspan="3"></th>
        </tr>
    </tfoot>
</table>
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="subtitulo_modal" class="modal-title">Modal Heading</h4>
        <span onclick="$('#myModal').modal(&quot;hide&quot;);" class="close text-muted" title="Cerrar">X</span>
      </div>    
      <!-- Modal body -->
      <div id="body_modal" class="modal-body">

        <form action="/action_page.php">
        <div class="form-group">
            <label for="come_info_id">ID:</label>
            <input type="text" class="form-control" id="come_info_id">
        </div>
    <div class="form-group">
            <label for="come_info_nombre">Nombre: </label>
            <input type="text" class="form-control" id="come_info_nombre">
          </div>
        <div class="form-group">
            <label for="come_info_apellido">Apellido:</label>
            <input type="text" class="form-control" id="come_info_apellido">
        </div>
        <div class="form-group">
            <label for="come_info_eps">EPS :</label>
            <input type="text" class="form-control" id="come_info_eps">
        </div>
        <div class="form-group">
            <label for="correo_comercial">Correo:</label>
            <input type="text" class="form-control" id="correo_comercial">
        </div>
        <div class="form-group">
            <label for="clave_comercial">password :</label>
            <input type="password" class="form-control" id="clave_comercial">
        </div>

          <button id="boton" type="submit" class="btn btn-primary" onclick="return grabar();">Grabar</button>
          <input type="hidden" id="crud" value="">
          <input type="hidden" name="row_crud" id="row_crud" value="">
        </form>
      </div>      
      <!-- Modal footer -->
      <div id="footer-modal" class="modal-footer">
        <span onclick="$('#myModal').modal(&quot;hide&quot;);" class="close text-muted" title="Cerrar">X</span>
      </div>
      
    </div>
  </div>
</div>

<?php echo '<script'; ?>
 src="js/CAPP/comercialprueba.js"><?php echo '</script'; ?>
><?php }
}
