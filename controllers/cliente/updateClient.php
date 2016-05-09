<?php

 	require('../conexion.php');
	
	$cedula = isset($_POST["cedula"]) ? $_POST["cedula"] : null;
 	$nombres = isset($_POST["nombres"]) ? $_POST["nombres"] : null;
 	$apellidos= isset($_POST["apellidos"]) ? $_POST["apellidos"] : null;
	$telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : null;
  
  $query = "UPDATE cliente SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono' WHERE cedula='$cedula'";
  
 	$result = mysqli_query($conexion, $query); //or die(mysqli_error($conexion));
	 
	 
 	if($result){
 		echo json_encode(array('success' => true, 'message' => 'Client updated successfully'));
 	}else{
		 $errorw = mysqli_error($conexion);
 		echo json_encode(array('success' => false, 'message' => $errorw));
 	}
?>