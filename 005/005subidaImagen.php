<?php

$cadenatexto = $_POST["username"];
echo "Usuario: " . $cadenatexto . "<br><br>";

//Datos del arhivo
$nombre_archivo = $_FILES['userfile']['name'];
$tipo_archivo = $_FILES['userfile']['type'];
$tamano_archivo = $_FILES['userfile']['size'];
	
//Comprobación extensión
if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) {
   	echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
}else{
    //Comprobación subida archivos
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'],  $nombre_archivo)){
      		echo "Archivo Cargado";
   	}else{
      		echo "ERROR al subir el archivo";
   	}
}

