<?php

 	require('../conexion.php');
	$cedula = $_POST["cedula"];
 	$nombres = $_POST["nombres"];
 	$apellidos= $_POST["apellidos"];
	$telefono = $_POST["telefono"];
  
	$query = "INSERT INTO cliente VALUES('$cedula','$nombres','$apellidos','$telefono')";
	
  
 	$result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
   
   

 	if($result){
 		echo "el cliente ha sido creado";
 	}else{
 		echo "Ha ocurrido un error al crear el cliente";
 	}
?>