<?php

 	require('../conexion.php');
  	 
		 $id = isset($_GET["id"]) ? $_GET["id"] : null;
	$codigo = isset($_GET["codigo"]) ? $_GET["codigo"] : null;
		 
  $query = "SELECT cedula_cliente FROM envio where codigo = '$codigo'";
	
	
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
 
 	if($result){
		$data = array();
		while($r = mysqli_fetch_assoc($result)) {
				$data[] = $r;
		}
		
    
    $response = array();
	
		if(count($data) > 0) {
      
      $cedulas_cliente = array_column($data, 'cedula_cliente');
			
			$response['success'] = true;

			$response["cedulas_cliente"] = $cedulas_cliente;
			
			$response['message'] = 'Cedulas found';
			
		}else{
			$response['success'] = false;
			$response['message'] = 'Cedulas not found';	
		}

		//{"success":boolean,
		// "cedulas_cliente":{
    //      56565,
    //      989898,
    //      1056565
		//		},
		// "message":"Cedulas found"
		// }
		echo json_encode($response);
	 
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>