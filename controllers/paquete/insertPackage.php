<?php

 	require('../conexion.php');
   
 
	
	$codigo_envio = isset($_POST["codigo_envio"]) ? $_POST["codigo_envio"] : null;
 	$cedula_cliente = isset($_POST["cedula_cliente"]) ? $_POST["cedula_cliente"] : null;
 	$codigo= isset($_POST["codigo"]) ? $_POST["codigo"] : null;
  $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : null;
	
	$query = "INSERT INTO paquete VALUES('$codigo','$descripcion','$codigo_envio','$cedula_cliente')";
	
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
 	if($result){
 		echo json_encode(array('success' => true, 'message' => 'Package inserted successfully'));
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>