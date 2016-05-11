<?php

 	require('../conexion.php');
  	 
  $query = "SELECT cedula FROM cliente";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
 
 	if($result){
		$client = array();
		while($r = mysqli_fetch_assoc($result)) {
				$client[] = $r;
		}
    
    
    
    
    //print_r($cedulas);
    
    $response = array();
	
		if(count($client) > 0) {
      
      $cedulas = array_column($client, 'cedula');

			$response['success'] = true;

			$response["cedulas"] = $cedulas;
			
			$response['message'] = 'Cedulas found';
			
		}else{
			$response['success'] = false;
			$response['message'] = 'Cedulas not found';	
		}

		//{"success":boolean,
		// "cedulas":{
    //      1000000,
    //      1000100,
    //      2009560,
		//		},
		// "message":"Cedulas found"
		// }
		echo json_encode($response);
	 
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>