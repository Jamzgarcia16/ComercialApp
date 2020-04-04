function editar(argument,obj) {
    //alert(obj);
    yy=obj.split("-");  // En PHP:   explode
    //alert(yy[1]);
    $("#row_crud").val(yy[1]);
    // $("#row_crud").val(obj);
    $("#subtitulo_modal").text("Edición de registro de Perfil");
    $("#come_info_id").val(argument);
    $("#boton").text("Grabar").removeClass("btn-danger btn-warning").addClass("btn-primary");
    $("#crud").val("u");

    $.post("trae_comercial_info.php",
    {
        come_info_id: argument
    },
    function(data, status) { // Callback
        objson = JSON.parse(data);
        // alert("Data: " + objson.titulo + "\nStatus: " + status);
        $("#come_info_id").val(objson.come_info_id).attr("readonly", true);
        $("#come_info_nombre").val(objson.come_info_nombre).attr("readonly", false);
        $("#come_info_apellido").val(objson.come_info_apellido).attr("readonly", false);
        $("#come_info_eps").val(objson.come_info_eps).attr("readonly", false);
        
    });

 }
 function cargar_reporte() {
    alert("Funciona Mi Hermano!"); 
}

 function eliminar(argument,obj) {
     yy=obj.split("-");  // En PHP:   explode
    //alert(yy[1]);
    $("#row_crud").val(yy[1]);
    $("#subtitulo_modal").text("Eliminación de registro de Perfil");
    $("#come_info_id").val(argument);
    $("#boton").text("Eliminar").addClass("btn-danger").removeClass("btn-primary btn-warning");
    $("#crud").val("d");

    $.post("trae_comercial_info.php",
    {
        come_info_id: argument
    },
    function(data, status){ // Callback
        objson = JSON.parse(data);
        // alert("Data: " + objson.titulo + "\nStatus: " + status);
         $("#come_info_id").val(objson.come_info_id).attr("readonly", true);
        $("#come_info_nombre").val(objson.come_info_nombre).attr("readonly", true);
        $("#come_info_apellido").val(objson.come_info_apellido).attr("readonly", true);
        $("#come_info_eps").val(objson.come_info_eps).attr("readonly", true);
    });
    
 }

 function adicionar() {
    $("#row_crud").val("");
    $("#subtitulo_modal").text("Crear Comercial");
    $("#boton").text("Crear").addClass("btn-warning").removeClass("btn-primary btn-danger");
    $("#crud").val("c");
    $("#come_info_id").val("").attr("disabled", true);

    $.post("trae_comercial_info.php",
    {
      
    },
    function(data, status){ // Callback
      objson = JSON.parse(data);
      // alert(data);
      $("#come_info_id").val("").attr("readonly", true);
      $("#come_info_nombre").val("").attr("readonly", false);
      $("#come_info_apellido").val("").attr("readonly", false);
      $("#come_info_eps").val("").attr("disabled", false);
    });
 }




 