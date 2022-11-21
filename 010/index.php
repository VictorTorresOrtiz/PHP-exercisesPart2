<?php
session_start();
include '../011/011login.php';
    if(isset($_POST['login'])){

        $usuario = $_POST['usuario'];
        $password = ($_POST['password']);
        $status = '1'; //Sesion 1 iniciada 
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

    <title>010</title>
</head>
<body>

<form action="../011/011login.php" method="POST">
  <div class="mb-3">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="usuario" name="usuario">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>

