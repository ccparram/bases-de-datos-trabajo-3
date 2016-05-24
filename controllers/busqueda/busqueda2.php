<?php

 	require('../conexion.php');
	
	$codigo = isset($_GET["codigo"]) ? $_GET["codigo"] : null;
  	 
  $query = "Select paquete.codigo as codigo_paquete, codigo_envio, lugarOrigen, lugarDestino, costo, cedula, nombres, apellidos, telefono FROM paquete JOIN envio ON paquete.codigo_envio=envio.codigo JOIN cliente ON envio.cedula_cliente=cliente.cedula WHERE paquete.codigo ='$codigo'";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 	 
 	if($result){
		$envios = array();
		while($r = mysqli_fetch_assoc($result)) {
				$envios[] = $r;
		}
		
		if(count($envios) > 0) {
			$envios['success'] = true;
		
			//Change position '0' name for 'client' in array
			$envios["envios"] = $envios[0];
			unset($envios["0"]);
			
			$envios['message'] = 'Client found';
			
		}else{
			$envios['success'] = false;
			$envios['message'] = 'Client not found';	
		}
		
		echo json_encode($envios);
	 
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>