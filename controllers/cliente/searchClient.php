<?php

 	require('../conexion.php');
	
	$cedula = isset($_GET["cedula"]) ? $_GET["cedula"] : null;
  	 
  $query = "SELECT * FROM cliente where cliente.cedula = '$cedula'";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
	
	 
 	if($result){
		$client = array();
		while($r = mysqli_fetch_assoc($result)) {
				$client[] = $r;
		}
		
		if(count($client) > 0) {
			$client['success'] = true;
		
			//Change position '0' name for 'client' in array
			$client["client"] = $client[0];
			unset($client["0"]);
			
			$client['message'] = 'Client found';
			
		}else{
			$client['success'] = false;
			$client['message'] = 'Client not found';	
		}
		
		//{"success":boolean,
		// "client":{
		//		"cedula": String,
		//		"nombres": String,
		//		"apellidos": String,
		//		"telefono": String
		//		},
		// "message":"Client found"
		// }
		echo json_encode($client);
	 
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>