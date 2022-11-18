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
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'],  $nombre_archivo)){
      		echo "Archivo Cargado";
   	}else{
      		echo "ERROR al subir el archivo";
   	}
}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap JS and CSS files-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Bootstrap JS and CSS files-->

    <title>004</title>
</head>
<body>

</body>
</html>