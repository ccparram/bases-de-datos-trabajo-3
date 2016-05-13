<?php

 	require('../conexion.php');
	
	$codigo = isset($_POST["codigo"]) ? $_POST["codigo"] : null;
	$cedula_cliente = isset($_POST["cedula_cliente"]) ? $_POST["cedula_cliente"] : null;
  
  $query = "DELETE from envio WHERE codigo='$codigo' AND cedula_cliente='$cedula_cliente'";
  
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
 	if($result){
 		echo json_encode(array('success' => true, 'message' => 'Shipping delete successfully'));
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>