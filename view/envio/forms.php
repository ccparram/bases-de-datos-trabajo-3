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

    <div class="row">
      <div class="col-md-7">
        <form id="formSearchUpdateShipping" action="controllers/envio/searchEnvio.php" method="GET">
          <div class="form-group  col-sm-6 col-md-offset-2">
            <input type="number" class="form-control" name="codigo" placeholder="Código" required>
          </div>
          <div class="form-group  col-sm-6 col-md-offset-2">
            <input type="number" class="form-control" name="cedula_cliente" placeholder="Cliente" required>
          </div>
          <div>
            <button type="submit" class="btn btn-default">Seacrh</button>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
 
        <form id="formUpdateShipping" method="POST" accept-charset="UTF-8" class="form-horizontal" >
          
          <div class="form-group">
            <label for="inputCodigo" class="col-sm-2 control-label">Código</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputCodigo" name="codigo" placeholder="Código" disabled required>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputCedulaCliente" class="col-sm-2 control-label">Cliente</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputCedulaCliente" name="cedula_cliente" placeholder="Cliente" disabled required>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputLugarOrigen" class="col-sm-2 control-label">Origen</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputLugarOrigen" name="lugarOrigen" placeholder="Lugar de origen" required>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputLugarDestino" class="col-sm-2 control-label">Destino</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputLugarDestino" name="lugarDestino" placeholder="Lugar de destino" required>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Update</button>
            </div>
          </div>
        </form>
      </div>
     </div>
    
  
  </div>

  
  
  <div id="delete" class="tab-pane fade">
    
    <div class="row">
      <h3>Delete Shipping</h3>
    </div>

    <div class="row">
      <div class="col-md-7">
        <form id="formSearchDeleteShipping" action="controllers/envio/searchEnvio.php" method="GET">
          <div class="form-group  col-sm-6 col-md-offset-2">
            <input type="number" class="form-control" name="codigo" placeholder="Código" required>
          </div>
          <div class="form-group  col-sm-6 col-md-offset-2">
            <input type="number" class="form-control" name="cedula_cliente" placeholder="Cliente" required>
          </div>
          <div>
            <button type="submit" class="btn btn-default">Seacrh</button>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
 
        <form id="formDeleteShipping" method="POST" accept-charset="UTF-8" class="form-horizontal" >
          
          <div class="form-group">
            <label for="inputCodigo" class="col-sm-2 control-label">Código</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputCodigo" name="codigo" placeholder="Código" disabled required>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputCedulaCliente" class="col-sm-2 control-label">Cliente</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputCedulaCliente" name="cedula_cliente" placeholder="Cliente" disabled required>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputLugarOrigen" class="col-sm-2 control-label">Origen</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputLugarOrigen" name="lugarOrigen" placeholder="Lugar de origen" required>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputLugarDestino" class="col-sm-2 control-label">Destino</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputLugarDestino" name="lugarDestino" placeholder="Lugar de destino" required>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Delete</button>
            </div>
          </div>
        </form>
      </div>
     </div>
    
  
  </div>

  
  
</div>



<!-- /////  Insert Shippin ///// -->
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
 
 <!-- /////  Search for Update Shipping by Client Cedula ///// -->
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
 
  <!-- /////  Search Update Shippin by codigo & cedula_cliente ///// -->
 <script>
   
   // Variable to hold request
  var request;

  // Bind to the submit event of our form
  $("#formSearchUpdateShipping").submit(function( event ){

      event.preventDefault();
      
      var $form = $(this);

      var $inputs = $form.find("input");
            
      var serializedData = $form.serialize();
      
      searchWithPK(serializedData, "#formUpdateShipping", "controllers/envio/searchShipping.php", "shipping");

  }); 
 
 </script>
 
 
   
  <!-- /////  Update Shipping ///// -->
 <script>
   
   // Variable to hold request
  var request;

  // Bind to the submit event of our form
  $("#formUpdateShipping").submit(function( event ){
  
    event.preventDefault();
    
    var $form = $(this);
    
    if($form.find("input[name='codigo']").val() === ""){
      $("#include-alert-message").empty();
      $("#include-alert-message").append( "<div class=\"alert alert-warning alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ "Please enter a Código & Cliente" +"</div>" );
      return;
    }

    if (request) { request.abort(); }

    var $inputs = $form.find("input");
          
    var disabled = $form.find(':input:disabled').removeAttr('disabled');      
    var serializedData = $form.serialize();
    
    disabled.attr('disabled','disabled');
    
    $inputs.prop("disabled", true);
    request = $.ajax({
        url: "controllers/envio/updateShipping.php",
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
        disabled.attr('disabled','disabled');
    });
      
  }); 
 
 </script>
 
 
  
 <!-- /////  Search Delete Shipping ///// -->
 <script>
   
   // Variable to hold request
  var request;

  // Bind to the submit event of our form
  $("#formSearchDeleteShipping").submit(function( event ){

      event.preventDefault();
      
      var $form = $(this);

      var $inputs = $form.find("input");
            
      var serializedData = $form.serialize();

      searchWithPK(serializedData, "#formDeleteShipping", "controllers/envio/searchShipping.php", "shipping");

  }); 
 
 </script>
 
   <!-- /////  Delete Shipping ///// -->
 <script>
   
   // Variable to hold request
  var request;

  // Bind to the submit event of our form
  $("#formDeleteShipping").submit(function( event ){
  
    event.preventDefault();

    var $form = $(this);
    
    if($form.find("input[name='codigo']").val() === ""){
      $("#include-alert-message").empty();
      $("#include-alert-message").append( "<div class=\"alert alert-warning alert-dismissible col-sm-6\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"+ "Please enter a Código & Cliente" +"</div>" );
      return;
    }

    if (request) { request.abort(); }

    var $inputs = $form.find("input");
          
    var disabled = $form.find(':input:disabled').removeAttr('disabled');      
    var serializedData = "codigo="+$form.find("input[name='codigo']").val() +
                        "&cedula_cliente="+$form.find("input[name='cedula_cliente']").val() ;
        
    disabled.attr('disabled','disabled');
    
    $inputs.prop("disabled", true);
    request = $.ajax({
        url: "controllers/envio/deleteShipping.php",
        type: "post",
        data: serializedData
    });
      
    request.done(function (response, textStatus, jqXHR){

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
        disabled.attr('disabled','disabled');
    });
      
  }); 
 
 </script>
 
  

 <script src="controllers/js/search.js"></script>
 <script src="controllers/js/remove_alert.js"></script>
 <script src="controllers/js/populateForm.js"></script>
 <script src="controllers/js/select_picker.js"></script>
 