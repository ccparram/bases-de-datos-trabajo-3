<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#insert">Insert</a></li>
  <li><a data-toggle="tab" href="#update">Update</a></li>
  <li><a data-toggle="tab" href="#delete">Delete</a></li>
</ul>

<div class="tab-content">
  <div id="insert" class="tab-pane fade in active">
    
    <div class="row">
      <h3>New Client</h3>
    </div>
    
    <div class="row">
    
      <div class="col-md-6">
      
        <form id="formInsertClient" method="POST" accept-charset="UTF-8" class="form-horizontal" >
          
          <div class="form-group">
            <label for="inputCedula" class="col-sm-2 control-label">Cédula</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputCedula" name="cedula" placeholder="Cédula">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputNombres" class="col-sm-2 control-label">Nombres</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputNombres" name="nombres" placeholder="Nombres">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputApellidos" class="col-sm-2 control-label">Apellidos</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputApellidos" name="apellidos" placeholder="Apellidos">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputTelefono" class="col-sm-2 control-label">Teléfono</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="inputTelefono" name="telefono" placeholder="Teléfono">
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
    <h3>Update Client</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="delete" class="tab-pane fade">
    <h3>Delete Client</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>

<script> 
 // Variable to hold request
  var request;

  // Bind to the submit event of our form
  $("#formInsertClient").submit(function( event ){

      event.preventDefault();
  
  // Abort any pending request
      if (request) {
          request.abort();
      }
      // setup some local variables
      var $form = $(this);
      
      // Let's select and cache all the fields
      var $inputs = $form.find("input");
    
      // Serialize the data in the form
      var serializedData = $form.serialize();
      
      // Let's disable the inputs for the duration of the Ajax request.
      $inputs.prop("disabled", true);
      
      
      // Fire off the request to /form.php
      request = $.ajax({
          url: "controllers/cliente/insertClient.php",
          type: "post",
          data: serializedData
      });
      
      // Callback handler that will be called on success
      request.done(function (response, textStatus, jqXHR){
          // Log a message to the console
          var responseJSON = $.parseJSON(response);
          
          $("#include-alert-message").empty();
          
          if(responseJSON.success){
            $("#include-alert-message").append( "<div class=\"alert alert-success alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" );            
          }
          else{
            $("#include-alert-message").append( "<div class=\"alert alert-warning alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ responseJSON.message +"</div>" );
          }
          
      });

      // Callback handler that will be called on failure
      request.fail(function (jqXHR, textStatus, errorThrown){
          // Log the error to the console
          console.error(
              "The following error occurred: "+
              textStatus, errorThrown
          );
      });

      // Callback handler that will be called regardless
      // if the request failed or succeeded
      request.always(function () {
          // Reenable the inputs
          $inputs.prop("disabled", false);
      });
  }); 
    
 </script>
 
 <script src="controllers/js/remove_alert.js"></script>