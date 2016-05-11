<?php

 	require('../conexion.php');
	
	$cedula_cliente = isset($_GET["cedula_cliente"]) ? $_GET["cedula_cliente"] : null;
	$codigo = isset($_GET["codigo"]) ? $_GET["codigo"] : null;
	  	 
  $query = "SELECT * FROM envio where cedula_cliente = '$cedula_cliente' AND codigo = '$codigo'";
	
	/*
	SELECT * 
	FROM `envio`
	WHERE cedula_cliente = 78 ANd codigo = 1
	*/
	
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
	
	 
 	if($result){
		$data = array();
		while($r = mysqli_fetch_assoc($result)) {
				$data[] = $r;
		}
		
		if(count($data) > 0) {
			$data['success'] = true;
		
			//Change position '0' name for 'client' in array
			$data["shipping"] = $data[0];
			unset($data["0"]);
			
			$data['message'] = 'Shipping found';
			
		}else{
			$data['success'] = false;
			$data['message'] = 'Shipping not found';	
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
		echo json_encode($data);
	 
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>