<?php

 	require('../conexion.php');
	
	$codigo = isset($_POST["codigo"]) ? $_POST["codigo"] : null;
  
  $query = "DELETE from paquete WHERE codigo='$codigo'";
  
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
	 
 	if($result){
 		echo json_encode(array('success' => true, 'message' => 'Package delete successfully'));
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>