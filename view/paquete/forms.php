<ul class="nav nav-tabs">
  <li id="tabInsertPackage" class="active"><a data-toggle="tab" href="#insert">Insert</a></li>
  <li><a data-toggle="tab" href="#update">Update</a></li>
  <li><a data-toggle="tab" href="#delete">Delete</a></li>
</ul>

<div class="tab-content">

  <div id="insert" class="tab-pane fade in active">
    
    <div class="row">
      <h3>New Package</h3>
    </div>
    
    <div class="row">
      <div class="col-md-7">
        <form id="formInsertShipping" method="POST" accept-charset="UTF-8" class="form-horizontal" >
          
          <div class="form-group">
            <label for="inputEnvio" class="col-sm-2 control-label">Envío</label>
            <div class="col-sm-10">
              <select id="inputEnvio" name="codigo_envio" class="selectpicker" data-live-search="true" required>
              </select>
            </div>
            </div>
            <div class="form-group">
            <label for="inputSelectCliente" class="col-sm-2 control-label">Cliente</label>
            <div class="col-sm-10">
              <select id="inputSelectCliente" name="cedula_cliente"  data-live-search="true" required>
              </select>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputCodigo" class="col-sm-2 control-label">Código</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputCodigo" name="codigo" placeholder="Código">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputDescripcion" class="col-sm-2 control-label">Descripción</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputDescripcion" name="descripcion" placeholder="Descripción">
            </div>
          </div>
          
        </form>
      </div>
     </div>
    
  </div>
  
  
  <div id="update" class="tab-pane fade">
    
    <div class="row">
      <h3>Update Shipping</h3>
    </div>

  </div>

  
  
  <div id="delete" class="tab-pane fade">
    
    <div class="row">
      <h3>Delete Shipping</h3>
    </div>

  </div>

  
</div>


 <script src="controllers/js/populate_select.js"></script>

<!-- /////  Search for Insert Shipping by Client Cedula ///// -->
 <script>

   $("#tabInsertPackage").click(function(){
     getListEnvioCodigo();  });
   
   $( document ).ready(function(){
      getListEnvioCodigo();  });
   
   // Variable to hold request
  var request;

  function getListEnvioCodigo(){
      if (request) {
          request.abort();
      }
      
      request = $.ajax({
          url: "controllers/envio/selectAllShippingCodigo.php",
          type: "get"
      });
        
      request.done(function (response, textStatus, jqXHR){
          
          var responseJSON = $.parseJSON(response);
          
          $("#include-alert-message").empty();
          
          if(responseJSON.success){
             populate_select($("#inputEnvio"), responseJSON.codigos);
            $("#include-alert-message").append( "<div class=\"alert alert-success alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" ); 
          } 
          else{
            $(formToPopulate)[0].reset();
            $("#include-alert-message").append( "<div class=\"alert alert-warning alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" );
          }
          
      });

      request.fail(function (jqXHR, textStatus, errorThrown){
          console.error(
              "The following error occurred: "+
              textStatus, errorThrown
          );
      });  

  }
  
   $( "#inputEnvio" ).change(function() {
       getListClienteCedulaByEnvioCodigo($( "#inputEnvio" ).val());
   });
  
  function getListClienteCedulaByEnvioCodigo(codigo){
      if (request) {
          request.abort();
      }
      
      var serializedData = "codigo=" + codigo;
      request = $.ajax({
          url: "controllers/envio/selectAllClientCedulaByShippingCodigo.php",
          type: "get",
          data: serializedData
      });
      
      
        
      request.done(function (response, textStatus, jqXHR){
          
          var responseJSON = $.parseJSON(response);
          
          $("#include-alert-message").empty();

          if(responseJSON.success){
             populate_select($("#inputSelectCliente"), responseJSON.cedulas_cliente);
            $("#include-alert-message").append( "<div class=\"alert alert-success alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" ); 
          } 
          else{
            $(formToPopulate)[0].reset();
            $("#include-alert-message").append( "<div class=\"alert alert-warning alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" );
          }
          
      });

      request.fail(function (jqXHR, textStatus, errorThrown){
          console.error(
              "The following error occurred: "+
              textStatus, errorThrown
          );
      });  

  }
 
 </script>
 
  

 <script src="controllers/js/search.js"></script>
 <script src="controllers/js/remove_alert.js"></script>
 <script src="controllers/js/populateForm.js"></script>
 <script src="controllers/js/select_picker.js"></script>
 