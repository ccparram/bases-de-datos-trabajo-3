<?php

 	require('../conexion.php');
   
 
	
	$codigo = isset($_POST["codigo"]) ? $_POST["codigo"] : null;
 	$lugarOrigen = isset($_POST["lugarOrigen"]) ? $_POST["lugarOrigen"] : null;
 	$lugarDestino= isset($_POST["lugarDestino"]) ? $_POST["lugarDestino"] : null;
  $cliente = isset($_POST["cliente"]) ? $_POST["cliente"] : null;
  
  
	$query = "INSERT INTO envio VALUES('$codigo','$lugarOrigen','$lugarDestino','$cliente')";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
 	if($result){
 		echo json_encode(array('success' => true, 'message' => 'Shipping inserted successfully'));
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>