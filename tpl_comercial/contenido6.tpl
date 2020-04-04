{if $opcion != ""}
	{* Cargar un módulo/opción de la aplicación *}
	{if $modulo != ""}
		{include file="$modulo$VERSION.tpl"}
	{else}
		<img src="imagenes/perro_bravo.jpg" width="80%">
	{/if}
{else}
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
		      <h4 class="modal-title" style="margin-right: 80;">{$SOFTWARE}</h4>
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
		          <p class="card-text">Bienvenidos a el Software {$SOFTWARE} Version {$VERSION}, Estan en la <strong>{$NOMBRE_DROGUERIA} </strong>
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
{/if}

