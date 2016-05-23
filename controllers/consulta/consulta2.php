<?php

 	require('../conexion.php');
  	 
  $query = "SELECT cedula, nombres, apellidos, telefono FROM envio INNER JOIN cliente ON envio.cedula_cliente=cliente.cedula GROUP BY cedula_cliente HAVING COUNT(*) BETWEEN 2 AND 4";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
 	if($result){
		$consulta2 = array();
		while($r = mysqli_fetch_assoc($result)) {
				$consulta2[] = $r;
		}
		
		if(count($consulta2) > 0) {
			
		
			//Change position '0' name for 'consulta1' in array
			$jsonConsulta2["clients"] = $consulta2;
      
      $jsonConsulta2['success'] = true;
			
			$jsonConsulta2['message'] = 'Clients found';
			
		}else{
			$jsonConsulta2['success'] = false;
			$jsonConsulta2['message'] = 'Clients not found';	
		}

		echo json_encode($jsonConsulta2);
	 
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>