
<?php
 session_start();
 $sesion = $_SESSION["test"];
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

    <title>012</title>
</head>
<body>
    <ul class="list-group">
        <h1>Listado de Peliculas</h1>
    <li class="list-group-item active" aria-current="true">Olga y el terror PHP</li>
    <li class="list-group-item">La Ira de PHP vuelve</li>
    <li class="list-group-item">La fiesta de la OCCO</li>
    </ul>
    
    <a href="../013/013logout.php" >
        <button type="button" class="btn btn-danger mt-5">Logout</button>
    </a>
</body>
</html>