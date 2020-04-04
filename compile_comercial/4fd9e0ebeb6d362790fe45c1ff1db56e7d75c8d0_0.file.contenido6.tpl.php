<?php
/* Smarty version 3.1.32, created on 2020-04-02 02:26:55
  from 'C:\xampp\tpl_comercial\contenido6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e85314f3a08a0_15403606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fd9e0ebeb6d362790fe45c1ff1db56e7d75c8d0' => 
    array (
      0 => 'C:\\xampp\\tpl_comercial\\contenido6.tpl',
      1 => 1585277076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e85314f3a08a0_15403606 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['opcion']->value != '') {?>
		<?php if ($_smarty_tpl->tpl_vars['modulo']->value != '') {?>
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['modulo']->value).((string)$_smarty_tpl->tpl_vars['VERSION']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php } else { ?>
		<img src="imagenes/perro_bravo.jpg" width="80%">
	<?php }
} else { ?>
	 	<!-- 	<img src="fotos/fondo.jpg" width="80%"> -->
		<div class="container">
		<h2>Comercial App.</h2>
		<p>Aplicacion DEMO Comercial App, Fue Diseñada para darles a Ustedes mis Queridos Amigos Comerciales una Herramienta que les facilite muchos de los procesos que hoy en dia llevan y puedan tener un mejor control de sus clientes.</p>

		<!-- Button to Open the Modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
		Abrir Mensaje
		</button>

		<!-- The Modal -->
		<div class="modal fade" id="myModal">
		<div class="modal-dialog">
		  <div class="modal-content">
		  
		    <!-- Modal Header -->
		    <div class="modal-header">
		      <h4 class="modal-title" style="margin-right: 80;"><?php echo $_smarty_tpl->tpl_vars['SOFTWARE']->value;?>
</h4>
		          <br>
				  <br>
		          <div class="card" style="width:400px">
		            <img class="card-img-top" src="fotos/logo_club.png" alt="Card image" style="width: 100px; heigth: 100px;">
		          </div>
		      <button type="button" class="close" data-dismiss="modal">&times;</button>
		    </div>
		    
		    <!-- Modal body -->
		    <div class="modal-body">
		       <div class="card-body">
		          <p class="card-text">Bienvenidos a el Software <?php echo $_smarty_tpl->tpl_vars['SOFTWARE']->value;?>
 Version <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
, Estan en la <strong><?php echo $_smarty_tpl->tpl_vars['NOMBRE_DROGUERIA']->value;?>
 </strong>
		          <br> 
		          Quiero Expresarles mis mas sinceros agradecimientos por haber ingresado y leido este comentario, 
		          <strong> de ante mano que todo lo que quiera le sea consedido si es con disciplina y esfuerzo que lucho por ello. <strong>
		          <br>
		          By. Jamz Garcia
		          <br>
		          <strong>Feliz Dia.</strong>
		          <br>
		          <small> Publicacado el 26 de Marzo de 2020.</small></p>
		        </div>
		    </div>
		    
		    <!-- Modal footer -->
		    <div class="modal-footer">
		      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		    </div>
		    
		  </div>
		</div>
		</div>

		</div>
		<br>

		<div class="container">
			
					
		</div>

		<br>
<?php }?>

<?php }
}
