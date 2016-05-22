<?php

 	require('../conexion.php');
	
	$codigo = isset($_GET["codigo"]) ? $_GET["codigo"] : null;
  	 
  $query = "SELECT * FROM paquete where paquete.codigo = '$codigo'";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
 	if($result){
		$package = array();
		while($r = mysqli_fetch_assoc($result)) {
				$package[] = $r;
		}
		
		if(count($package) > 0) {
			$package['success'] = true;
		
			//Change position '0' name for 'client' in array
			$package["package"] = $package[0];
			unset($package["0"]);
			
			$package['message'] = 'Package found';
			
		}else{
			$package['success'] = false;
			$package['message'] = 'Package not found';	
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
		echo json_encode($package);
	 
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>