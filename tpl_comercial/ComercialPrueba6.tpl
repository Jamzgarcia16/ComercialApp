Bienvenido Comercial

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
  {foreach $tabla_comercial as $fila}
  <tr>
    <td style="text-align: center;">
      <a href="#" title="Editar" data-toggle="modal" data-target="#myModal"  onclick="return editar({$fila.come_info_id},this.parentNode.parentNode.id);"><i class="fa fa-edit" style="font-size:24px; color:blue;"></i></a>
    </td>
    <td>{$fila.come_info_id}</td>
    <td>{$fila.come_info_nombre}</td>
    <td>{$fila.come_info_apellido}</td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align: center;">
      <a href="#" title="Eliminar" data-toggle="modal" data-target="#myModal" onclick="return eliminar({$fila.come_info_id},this.parentNode.parentNode.id);"><i class="fa fa-trash-o" style="font-size:24px; color:red;"></i></a>
    </td>
  </tr>
  {/foreach}
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

<script src="js/CAPP/comercialprueba.js"></script>