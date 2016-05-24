<div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div id="consulta1" class="btn-group" role="group">
    <button type="button" class="btn btn-default">Consulta 1</button>
  </div>
  <div id="consulta2" class="btn-group" role="group">
    <button type="button" class="btn btn-default">Consulta 2</button>
  </div>
  <div id="consulta3" class="btn-group" role="group">
    <button type="button" class="btn btn-default">Consulta 3</button>
  </div>
</div>


<div class="row" id="titleConsulta"></div>

<div id="includedTableConsulta" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  
  <div class="row">
        <div class="col-md-6">
          <table id="tableConsulta" class="table table-striped">
          </table>
        </div>
      </div>
  
</div>

<script src="controllers/js/populate_table.js"></script>

<!-- Consulta 1 -->

<script>

$( "#consulta1" ).click(function() {
  
  $("#titleConsulta").empty().append('<h2>Envíos sin paquetes asociados</h2>');
  
  var request;

    if (request) { request.abort(); }

    request = $.ajax({
        url: "controllers/consulta/consulta1.php",
        type: "get"
    });
      
    request.done(function (response, textStatus, jqXHR){

        var responseJSON = $.parseJSON(response);
        
        
        
        $("#include-alert-message").empty();
        
        if(responseJSON.success){
          $("#include-alert-message").append( "<div class=\"alert alert-success alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" ); 
          var columnNames = ["Codigo", "Lugar de Origen", "Lugar de Destino", "Cliente"]; 
          populate_table("#tableConsulta", responseJSON.shippings, columnNames);
      } 
        else{
          $("#include-alert-message").append( "<div class=\"alert alert-warning alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" );
        }
        
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    request.always(function () {
    });
      
  }); 
 
 </script>
 
 
 <!-- Consulta 2 -->

<script>

$( "#consulta2" ).click(function() {
  
  $("#titleConsulta").empty().append('<h2>Clientes que tienen entre 2 y 4 Envíos</h2>');
  
  var request;

    if (request) { request.abort(); }

    request = $.ajax({
        url: "controllers/consulta/consulta2.php",
        type: "get"
    });
      
    request.done(function (response, textStatus, jqXHR){

        var responseJSON = $.parseJSON(response);
        
        $("#include-alert-message").empty();
        
        if(responseJSON.success){
          $("#include-alert-message").append( "<div class=\"alert alert-success alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" ); 
          var columnNames = ["Cédula", "Nombres", "Apellidos", "Teléfono"]; 
          populate_table("#tableConsulta", responseJSON.clients, columnNames);
      } 
        else{
          $("#include-alert-message").append( "<div class=\"alert alert-warning alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" );
        }
        
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    request.always(function () {
    });
      
  }); 
 
 </script>
 
 
  <!-- Consulta 3 -->

<script>

$( "#consulta3" ).click(function() {
  
  $("#titleConsulta").empty().append('<h2>Clientes con al menos 2 Envíos y cada uno de esos Envíos tiene al menos un paquete</h2>');
  
  var request;

    if (request) { request.abort(); }

    request = $.ajax({
        url: "controllers/consulta/consulta3.php",
        type: "get"
    });
      
    request.done(function (response, textStatus, jqXHR){

        var responseJSON = $.parseJSON(response);
        
        $("#include-alert-message").empty();
        
        if(responseJSON.success){
          $("#include-alert-message").append( "<div class=\"alert alert-success alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" ); 
          var columnNames = ["Cédula", "Nombres", "Apellidos", "Teléfono"]; 
          populate_table("#tableConsulta", responseJSON.clients, columnNames);
      } 
        else{
          $("#include-alert-message").append( "<div class=\"alert alert-warning alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" );
        }
        
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    request.always(function () {
    });
      
  }); 
 
 </script>
 