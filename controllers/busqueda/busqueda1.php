<?php

 	require('../conexion.php');
	
	$cedula = isset($_GET["cedula"]) ? $_GET["cedula"] : null;
  	 
  $query = "SELECT cod_envio, codigo as cod_paquete FROM (SELECT codigo as cod_envio FROM `envio` WHERE envio.cedula_cliente ='$cedula') as T LEFT JOIN paquete ON T.cod_envio=paquete.codigo_envio ";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 	 
 	if($result){
		$envios = array();
		while($r = mysqli_fetch_assoc($result)) {
				$envios[] = $r;
		}
		
		if(count($envios) > 0) {
			$busqueda1['success'] = true;
		
			//Change position '0' name for 'client' in array
			$busqueda1["envios"] = $envios;
			
			$busqueda1['message'] = 'Client found';
			
		}else{
			$busqueda1['success'] = false;
			$busqueda1['message'] = 'Client not found';	
		}
		
		echo json_encode($busqueda1);
	 
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>