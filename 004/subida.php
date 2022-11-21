<?php

/* POR HACER
$anchura = $_POST["anchura"];
$altura = $_POST["altura"];
*/

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Ver si es una imagen o un file
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

/*
$target_dir = Directorio donde se guarda
$target_file = Especifica el path del archivo que se va a subir
$imageFileType =  Extension de la imagen
*/

//Comprobar si Existe
if (file_exists($target_file)) {
	echo "Archivo ya existente.";
	$uploadOk = 0;
  }

//Limitar el file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
	echo "El archivo supera la capacidad";
	$uploadOk = 0;
  }


// Check  $uploadOk i
if ($uploadOk == 0) {
	echo "El archivo no esta descargada.";
  // Si esta ok se puede descargar
  } else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	  echo "El archivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " se ha descargado.";
	} else {
	  echo "Error al descargar.";
	}
  }

  /*
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
*/
  ?>
