<?php

 	require('../conexion.php');
	
	$codigo = isset($_GET["codigo"]) ? $_GET["codigo"] : null;
	
  $query = "Select paquete.codigo as codigo_paquete, codigo_envio, lugarOrigen, lugarDestino, costo, cedula, nombres, apellidos, telefono FROM paquete JOIN envio ON paquete.codigo_envio=envio.codigo JOIN cliente ON envio.cedula_cliente=cliente.cedula WHERE paquete.codigo ='$codigo'";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 	 
 	if($result){
		$paquete = array();
		while($r = mysqli_fetch_assoc($result)) {
				$paquete[] = $r;
		}
		
		if(count($paquete) > 0) {
			$busqueda2['success'] = true;
		
			$busqueda2["paquete"] = $paquete;
			
			$busqueda2['message'] = 'Paquete found';
			
		}else{
			$busqueda2['success'] = false;
			$busqueda2['message'] = 'Paquete not found';	
		}
		
		echo json_encode($busqueda2);
	 
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>