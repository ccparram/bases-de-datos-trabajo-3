<ul class="nav nav-tabs">
  <li id="tabInsertShipping" class="active"><a data-toggle="tab" href="#insert">Insert</a></li>
  <li><a data-toggle="tab" href="#update">Update</a></li>
  <li><a data-toggle="tab" href="#delete">Delete</a></li>
</ul>

<div class="tab-content">

  <div id="insert" class="tab-pane fade in active">
    
    <div class="row">
      <h3>New Shipping</h3>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <form id="formInsertShipping" method="POST" accept-charset="UTF-8" class="form-horizontal" >
          
          <div class="form-group">
            <label for="inputCliente" class="col-sm-2 control-label">Cliente</label>
            <div class="col-sm-10">
              <select id="inputCliente" name="cliente" class="selectpicker" data-live-search="true" required>
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
            <label for="inputLugarOrigen" class="col-sm-2 control-label">Origen</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputLugarOrigen" name="lugarOrigen" placeholder="Lugar de origen">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputLugarDestino" class="col-sm-2 control-label">Destino</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputLugarDestino" name="lugarDestino" placeholder="Lugar de destino">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Insert</button>
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



<!-- /////  Insert Client ///// -->
<script> 
 // Variable to hold request
  var request;

  // Bind to the submit event of our form
  $("#formInsertShipping").submit(function( event ){

      event.preventDefault();
  
      if (request) {
          request.abort();
      }
      var $form = $(this);
      
      var $inputs = $form.find("input");

      var serializedData = $form.serialize();

      $inputs.prop("disabled", true);

      request = $.ajax({
          url: "controllers/envio/insertShipping.php",
          type: "post",
          data: serializedData
      });

      request.done(function (response, textStatus, jqXHR){
        
        console.log(response);
        
          var responseJSON = $.parseJSON(response);
          
          $("#include-alert-message").empty();
          
          if(responseJSON.success){
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
      
      request.always(function () {
          $inputs.prop("disabled", false);
      });
  }); 
    
 </script>
 
 <script src="controllers/js/populate_select.js"></script>
 
 <!-- /////  Search Client Cedula ///// -->
 <script>
   
   $("#tabInsertShipping").click(function(){
     getListClienteCedula();
     
   });
   
   $( document ).ready(function(){
getListClienteCedula();
   });
   
   // Variable to hold request
  var request;

  // Bind to the submit event of our form
  function getListClienteCedula(){
    
    console.log("insertTab");

      if (request) {
          request.abort();
      }
      
      request = $.ajax({
          url: "controllers/cliente/selectAllClientCedula.php",
          type: "get"
      });
        
      request.done(function (response, textStatus, jqXHR){
          
          var responseJSON = $.parseJSON(response);
          
          $("#include-alert-message").empty();
          
          if(responseJSON.success){
             populate_select($("#inputCliente"), responseJSON.cedulas);
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
  
 <script src="controllers/js/select_picker.js"></script>
 <script src="controllers/js/search.js"></script>
 <script src="controllers/js/remove_alert.js"></script>
 <script src="controllers/js/populateForm.js"></script>
 