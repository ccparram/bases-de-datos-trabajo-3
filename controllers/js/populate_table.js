function populate_table(table, jsonData, columnNames){

    myTable = $( table );
    
        myTable.empty();
     
   
   jQuery("<thead><tr></tr></thead>").appendTo(myTable); 
   
   $.each( columnNames, function( key, value ) {
       
       $(table + ' THEAD tr').append('<th>'+value+'</th>');

    });
    
    $(table).append('<tbody></tbody>');
   
   $.each(jsonData, function(i, value) {              
 
        $(table + ' TBODY').append('<tr></tr>');
 
        $.each(value, function(i, value) {              
 
        $(table + ' tr:last').append('<td>'+value+'</td>');    
 
    }); 
 
    });
  
}


function populate_table_busqueda1(table, jsonData, columnNames){
    
    myTable = $( table );
    
        myTable.empty();
     
   
   jQuery("<thead><tr></tr></thead>").appendTo(myTable); 
   
   $.each( columnNames, function( key, value ) {
       
       $(table + ' THEAD tr').append('<th>'+value+'</th>');

    });
    
    $(table).append('<tbody></tbody>');
   
   $.each(jsonData, function(i, value) {              
 
        $(table + ' TBODY').append('<tr></tr>');
 
        $.each(value, function(i, value) {              
 
        $(table + ' tr:last').append('<td>'+value+'</td>');    
 
    }); 
 
    });

}