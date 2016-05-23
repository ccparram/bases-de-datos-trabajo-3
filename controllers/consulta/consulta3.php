<?php

 	require('../conexion.php');
  	 
  $query = "SELECT * FROM cliente where cliente.cedula IN (SELECT cedula_cliente FROM paquete GROUP BY paquete.cedula_cliente HAVING COUNT(*) >= 2)";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
 	if($result){
		$consulta3 = array();
		while($r = mysqli_fetch_assoc($result)) {
				$consulta3[] = $r;
		}
		
		if(count($consulta3) > 0) {
			
		
			//Change position '0' name for 'consulta1' in array
			$jsonConsulta3["clients"] = $consulta3;
      
      $jsonConsulta3['success'] = true;
			
			$jsonConsulta3['message'] = 'Clients found';
			
		}else{
			$jsonConsulta3['success'] = false;
			$jsonConsulta3['message'] = 'Clients not found';	
		}

		echo json_encode($jsonConsulta3);
	 
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>