<?php

 	require('../conexion.php');
  	 
  $query = "SELECT DISTINCT codigo FROM envio";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
 
 	if($result){
		$data = array();
		while($r = mysqli_fetch_assoc($result)) {
				$data[] = $r;
		}
    
    $response = array();
	
		if(count($data) > 0) {
      
      $codigos = array_column($data, 'codigo');

			$response['success'] = true;

			$response["codigos"] = $codigos;
			
			$response['message'] = 'Codigos found';
			
		}else{
			$response['success'] = false;
			$response['message'] = 'Codigos not found';	
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