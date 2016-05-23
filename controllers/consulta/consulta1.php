<?php

 	require('../conexion.php');
  	 
  $query = "SELECT * FROM envio WHERE envio.codigo NOT IN (SELECT codigo_envio FROM paquete)";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
 	if($result){
		$consulta1 = array();
		while($r = mysqli_fetch_assoc($result)) {
				$consulta1[] = $r;
		}
		
		if(count($consulta1) > 0) {
			
		
			//Change position '0' name for 'consulta1' in array
			$jsonConsulta1["shippings"] = $consulta1;
      
      $jsonConsulta1['success'] = true;
			
			$jsonConsulta1['message'] = 'Shippings found';
			
		}else{
			$jsonConsulta1['success'] = false;
			$jsonConsulta1['message'] = 'Shippings not found';	
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
		echo json_encode($jsonConsulta1);
	 
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>