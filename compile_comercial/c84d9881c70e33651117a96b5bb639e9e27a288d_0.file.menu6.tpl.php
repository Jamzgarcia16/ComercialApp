<?php
/* Smarty version 3.1.32, created on 2020-04-02 02:26:55
  from 'C:\xampp\tpl_comercial\menu6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e85314f33af95_49695467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c84d9881c70e33651117a96b5bb639e9e27a288d' => 
    array (
      0 => 'C:\\xampp\\tpl_comercial\\menu6.tpl',
      1 => 1547946354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e85314f33af95_49695467 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Sidebar -->
<ul class="sidebar navbar-nav">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_menus']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
	<li class="nav-item active">
	  <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['fila']->value['url'];?>
">
	    <?php echo $_smarty_tpl->tpl_vars['fila']->value['icono'];?>

	    <span><?php echo $_smarty_tpl->tpl_vars['fila']->value['titulo'];?>
</span>
	  </a>
	</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
