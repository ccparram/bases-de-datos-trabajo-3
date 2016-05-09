<?php

 	require('../conexion.php');
	
	$cedula = isset($_POST["cedula"]) ? $_POST["cedula"] : null;
  
  $query = "DELETE from cliente WHERE cedula='$cedula'";
  
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
	 
 	if($result){
 		echo json_encode(array('success' => true, 'message' => 'Client delete successfully'));
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>