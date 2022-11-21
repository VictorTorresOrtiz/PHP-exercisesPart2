<?php

$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$email = $_GET["email"];
$convivientes = $_GET["convivientes"];


if (isset($_GET["sexo"])) {
    $sexo = $_GET["sexo"];
    // comprobar si tiene el formato adecuado, su valor, etc...
}



if (isset($_GET["hobbies"])) {
    $hobbies = $_GET["hobbies"];
    // comprobar si tiene el formato adecuado, su valor, etc...
}


if (isset($_GET["gustos"])) {
    $gustos = $_GET["gustos"];
    // comprobar si tiene el formato adecuado, su valor, etc...
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

    <title>001</title>
</head>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Convivientes</th>
        <th scope="col">Email</th>
        <th scope="col">Sexo</th>
        <th scope="col">Hobbies</th>
        <th scope="col">Menu Favorito</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <!--Implode convierte array en string-->
        <th scope="row">1</th>
        <td><?php  echo $nombre?></td>
        <td><?php  echo $apellidos?></td>
        <td><?php  echo $convivientes?></td>
        <td><?php  echo $email?></td>
        <td><?php  print implode($sexo)?></td>
        <td><?php  print implode($hobbies)?></td>
        <td><?php  print implode($gustos)?></td>
        </tr>
    </tbody>
    </table>
</body>
</html>