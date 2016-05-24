<ul class="nav nav-tabs">
  <li id="tabBusqueda1" class="active"><a data-toggle="tab" href="#busqueda1">Búsqueda 1</a></li>
  <li><a data-toggle="tab" href="#busqueda2">Búsqueda 2</a></li>
</ul>

<div class="tab-content">
  
  <div id="busqueda1" class="tab-pane fade in active">
    
    <div class="row">
      <h3>Paquetes de los envíos pertenecientes a un cliente</h3>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <form id="formSearchBusqueda1" method="GET">
          <div class="form-group  col-sm-6 col-md-offset-2">
            <input type="number" class="form-control" name="cedula" placeholder="Search by Cédula" required>
          </div>
          <div>
            <button type="submit" class="btn btn-default">Buscar</button>
          </div>
        </form>
      </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
          <table id="tableBusqueda1" class="table table-striped">
          </table>
        </div>
    </div>
    
  </div>
  
  
  <div id="busqueda2" class="tab-pane fade">
    
    <div class="row">
      <h3>Datos del envío y el cliente al que pertenece un paquete</h3>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <form id="formSearchBusqueda2" method="GET">
          <div class="form-group  col-sm-6 col-md-offset-2">
            <input type="number" class="form-control" name="codigo" placeholder="Search by Código Paquete" required>
          </div>
          <div>
            <button type="submit" class="btn btn-default">Buscar</button>
          </div>
        </form>
      </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
          <table id="tableBusqueda2" class="table table-striped">
          </table>
        </div>
    </div>
    
  </div>
  

</div>


<script src="controllers/js/populate_table.js"></script>

 <!-- /////  Search Busqueda 1 ///// -->
 <script>

  var request;

  $("#formSearchBusqueda1").submit(function( event ){
    
    event.preventDefault();

    $("#tableBusqueda1").empty();
    
    var $form = $(this);
    
    if (request) { request.abort(); }

    var $inputs = $form.find("input");
    var serializedData = $form.serialize();

    request = $.ajax({
        url: "controllers/busqueda/busqueda1.php",
        type: "get",
        data: serializedData
    });
      
    request.done(function (response, textStatus, jqXHR){
        
        var responseJSON = $.parseJSON(response);;
        
        $("#include-alert-message").empty();
        
        if(responseJSON.success){
          populate_table_busqueda1("#tableBusqueda1",responseJSON.envios, ["Código envío", "Código Paquete"]);
          $("#include-alert-message").append( "<div class=\"alert alert-success alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" ); 
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
  }); 
 
 </script>
 
 
  <!-- /////  Search Busqueda 2 ///// -->
 <script>

  var request;

  $("#formSearchBusqueda2").submit(function( event ){
    
    event.preventDefault();

    $("#tableBusqueda2").empty();
    
    var $form = $(this);
    
    if (request) { request.abort(); }

    var $inputs = $form.find("input");
    var serializedData = $form.serialize();

    request = $.ajax({
        url: "controllers/busqueda/busqueda2.php",
        type: "get",
        data: serializedData
    });
      
    request.done(function (response, textStatus, jqXHR){
        
        var responseJSON = $.parseJSON(response);
        
        $("#include-alert-message").empty();
        
        if(responseJSON.success){
          populate_table_busqueda1("#tableBusqueda2",responseJSON.paquete, ["Código Paquete", "Código Envío",
                                                          "Lugar Origen", "Lugar Destino", "Costo", "Cédula Cliente", "Nombres", "Apellidos", "Teléfono"]);
          $("#include-alert-message").append( "<div class=\"alert alert-success alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" ); 
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
  }); 
 
 </script>
 
 