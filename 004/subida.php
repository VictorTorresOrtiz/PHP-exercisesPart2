<?php

$cadenatexto = $_POST["username"];
echo "Usuario: " . $cadenatexto . "<br><br>";

//Datos del arhivo
$nombre_archivo = $_FILES['userfile']['name'];
$tipo_archivo = $_FILES['userfile']['type'];
$tamano_archivo = $_FILES['userfile']['size'];
	
//Comprobación subida de archivo
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'],  $nombre_archivo)){
      		echo "Archivo Cargado";
   	}else{
      		echo "ERROR al subir el archivo";
   	}


