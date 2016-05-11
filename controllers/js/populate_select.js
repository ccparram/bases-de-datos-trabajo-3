function populate_select($select, jsonData){
  
  console.log(jsonData);
  
    
    //alert(options);                      
    $select.find('option').remove();                          
    $.each(jsonData, function(i, value) {              
        $('<option>').val(value).text(value).appendTo($select);     
    });
    
  
  
}