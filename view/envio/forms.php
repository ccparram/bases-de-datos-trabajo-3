<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#insert">Insert</a></li>
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
              <select class="selectpicker" data-live-search="true" required>
                <option>1</option>
                <option>2</option>
                <option>3</option>
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

<script>
  $(document).ready(function () {
    $('.selectpicker').selectpicker();
  });
</script>


 <script src="controllers/js/search.js"></script>
 <script src="controllers/js/remove_alert.js"></script>
 <script src="controllers/js/populateForm.js"></script>